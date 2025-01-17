<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Gate;
use App\Http\Controllers\Traits\CsvImportTrait;
use App\Http\Controllers\Traits\MediaUploadingTrait;
use App\Models\Vehicle;
use App\Models\Brand;
use App\Models\Client;
use App\Models\Suplier;
use App\Models\PaymentStatus;
use App\Models\Carrier;
use App\Models\PickupState;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Yajra\Datatables\Datatables;

class AcquisitionController extends Controller
{

    use MediaUploadingTrait, CsvImportTrait;

    public function index(Request $request)
    {
        abort_if(Gate::denies('acquisition_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        if ($request->ajax()) {
            $query = Vehicle::with(['brand', 'seller_client', 'buyer_client', 'suplier', 'payment_status', 'carrier', 'pickup_state', 'client'])->select(sprintf('%s.*', (new Vehicle)->table));
            $table = Datatables::of($query);

            $table->addColumn('placeholder', '&nbsp;');
            $table->addColumn('actions', '&nbsp;');

            $table->editColumn('actions', function ($row) {
                $viewGate      = 'vehicle_show';
                $editGate      = 'vehicle_edit';
                $deleteGate    = 'vehicle_delete';
                $crudRoutePart = 'vehicles';

                return view('partials.datatablesActions', compact(
                    'viewGate',
                    'editGate',
                    'deleteGate',
                    'crudRoutePart',
                    'row'
                ));
            });

            $table->editColumn('id', function ($row) {
                return $row->id ? $row->id : '';
            });
            $table->editColumn('license', function ($row) {
                return $row->license ? $row->license : '';
            });
            $table->addColumn('brand_name', function ($row) {
                return $row->brand ? $row->brand->name : '';
            });

            $table->editColumn('model', function ($row) {
                return $row->model ? $row->model : '';
            });
            $table->editColumn('vehicle_identification_number_vin', function ($row) {
                return $row->vehicle_identification_number_vin ? $row->vehicle_identification_number_vin : '';
            });
            $table->addColumn('seller_client_name', function ($row) {
                return $row->seller_client ? $row->seller_client->name : '';
            });

            $table->addColumn('buyer_client_name', function ($row) {
                return $row->buyer_client ? $row->buyer_client->name : '';
            });

            $table->addColumn('suplier_name', function ($row) {
                return $row->suplier ? $row->suplier->name : '';
            });

            $table->addColumn('payment_status_name', function ($row) {
                return $row->payment_status ? $row->payment_status->name : '';
            });

            $table->addColumn('carrier_name', function ($row) {
                return $row->carrier ? $row->carrier->name : '';
            });

            $table->addColumn('pickup_state_name', function ($row) {
                return $row->pickup_state ? $row->pickup_state->name : '';
            });

            $table->addColumn('client_name', function ($row) {
                return $row->client ? $row->client->name : '';
            });

            $table->rawColumns(['actions', 'placeholder', 'brand', 'seller_client', 'buyer_client', 'suplier', 'payment_status', 'carrier', 'pickup_state', 'client']);

            return $table->make(true);
        }

        $brands           = Brand::get();
        $clients          = Client::get();
        $supliers         = Suplier::get();
        $payment_statuses = PaymentStatus::get();
        $carriers         = Carrier::get();
        $pickup_states    = PickupState::get();

        return view('admin.acquisitions.index', compact('brands', 'clients', 'supliers', 'payment_statuses', 'carriers', 'pickup_states'));
    }

    public function create()
    {
        abort_if(Gate::denies('vehicle_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $brands = Brand::pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $seller_clients = Client::pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $buyer_clients = Client::pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $supliers = Suplier::pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $payment_statuses = PaymentStatus::pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $carriers = Carrier::pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $pickup_states = PickupState::pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $clients = Client::pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        return view('admin.acquisitions.create', compact('brands', 'buyer_clients', 'carriers', 'clients', 'payment_statuses', 'pickup_states', 'seller_clients', 'supliers'));
    }

}
