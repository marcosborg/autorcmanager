<?php

return [
    'userManagement' => [
        'title'          => 'Gestão de Utilizadores',
        'title_singular' => 'Gestão de Utilizador',
    ],
    'permission' => [
        'title'          => 'Permissões',
        'title_singular' => 'Permissão',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'title'             => 'Título',
            'title_helper'      => ' ',
            'created_at'        => 'Criado em',
            'created_at_helper' => ' ',
            'updated_at'        => 'Atualizado em',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Eliminado em',
            'deleted_at_helper' => ' ',
        ],
    ],
    'role' => [
        'title'          => 'Grupos',
        'title_singular' => 'Função',
        'fields'         => [
            'id'                 => 'ID',
            'id_helper'          => ' ',
            'title'              => 'Título',
            'title_helper'       => ' ',
            'permissions'        => 'Permissões',
            'permissions_helper' => ' ',
            'created_at'         => 'Criado em',
            'created_at_helper'  => ' ',
            'updated_at'         => 'Atualizado em',
            'updated_at_helper'  => ' ',
            'deleted_at'         => 'Eliminado em',
            'deleted_at_helper'  => ' ',
        ],
    ],
    'user' => [
        'title'          => 'Utilizadores',
        'title_singular' => 'Utilizador',
        'fields'         => [
            'id'                       => 'ID',
            'id_helper'                => ' ',
            'name'                     => 'Nome',
            'name_helper'              => ' ',
            'email'                    => 'Email',
            'email_helper'             => ' ',
            'email_verified_at'        => 'Email verificado em',
            'email_verified_at_helper' => ' ',
            'password'                 => 'Palavra-passe',
            'password_helper'          => ' ',
            'roles'                    => 'Funções',
            'roles_helper'             => ' ',
            'remember_token'           => 'Token de Lembrança',
            'remember_token_helper'    => ' ',
            'created_at'               => 'Criado em',
            'created_at_helper'        => ' ',
            'updated_at'               => 'Atualizado em',
            'updated_at_helper'        => ' ',
            'deleted_at'               => 'Eliminado em',
            'deleted_at_helper'        => ' ',
        ],
    ],
    'country' => [
        'title'          => 'Países',
        'title_singular' => 'País',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'name'              => 'Nome',
            'name_helper'       => ' ',
            'short_code'        => 'Código Curto',
            'short_code_helper' => ' ',
            'created_at'        => 'Criado em',
            'created_at_helper' => ' ',
            'updated_at'        => 'Atualizado em',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Eliminado em',
            'deleted_at_helper' => ' ',
        ],
    ],
    'setting' => [
        'title'          => 'Configurações',
        'title_singular' => 'Configuração',
    ],
    'client' => [
        'title'          => 'Clientes',
        'title_singular' => 'Cliente',
        'fields'         => [
            'id'                      => 'ID',
            'id_helper'               => ' ',
            'name'                    => 'Nome',
            'name_helper'             => ' ',
            'vat'                     => 'NIF',
            'vat_helper'              => ' ',
            'address'                 => 'Morada',
            'address_helper'          => ' ',
            'location'                => 'Localidade',
            'location_helper'         => ' ',
            'zip'                     => 'Código Postal',
            'zip_helper'              => ' ',
            'phone'                   => 'Telefone',
            'phone_helper'            => ' ',
            'email'                   => 'Email',
            'email_helper'            => ' ',
            'country'                 => 'País',
            'country_helper'          => ' ',
            'created_at'              => 'Criado em',
            'created_at_helper'       => ' ',
            'updated_at'              => 'Atualizado em',
            'updated_at_helper'       => ' ',
            'deleted_at'              => 'Eliminado em',
            'deleted_at_helper'       => ' ',
            'company_name'            => 'Nome da Empresa',
            'company_name_helper'     => ' ',
            'company_vat'             => 'NIF da Empresa',
            'company_vat_helper'      => ' ',
            'company_address'         => 'Morada da Empresa',
            'company_address_helper'  => ' ',
            'company_location'        => 'Localidade da Empresa',
            'company_location_helper' => ' ',
            'company_zip'             => 'Código Postal da Empresa',
            'company_zip_helper'      => ' ',
            'company_phone'           => 'Telefone da Empresa',
            'company_phone_helper'    => ' ',
            'company_email'           => 'Email da Empresa',
            'company_email_helper'    => ' ',
            'company_country'         => 'País da Empresa',
            'company_country_helper'  => ' ',
        ],
    ],
    'brand' => [
        'title'          => 'Marcas',
        'title_singular' => 'Marca',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'name'              => 'Nome',
            'name_helper'       => ' ',
            'created_at'        => 'Criado em',
            'created_at_helper' => ' ',
            'updated_at'        => 'Atualizado em',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Eliminado em',
            'deleted_at_helper' => ' ',
        ],
    ],
    'vehicle' => [
        'title'          => 'Veículos',
        'title_singular' => 'Veículo',
        'fields'         => [
            'id'                                        => 'ID',
            'id_helper'                                 => ' ',
            'license'                                   => 'Matrícula',
            'license_helper'                            => ' ',
            'brand'                                     => 'Marca',
            'brand_helper'                              => ' ',
            'model'                                     => 'Modelo',
            'model_helper'                              => ' ',
            'year'                                      => 'Ano',
            'year_helper'                               => ' ',
            'vehicle_identification_number_vin'         => 'Número de Identificação do Veículo (VIN)',
            'vehicle_identification_number_vin_helper'  => ' ',
            'license_date'                              => 'Data da Matrícula',
            'license_date_helper'                       => ' ',
            'color'                                     => 'Cor',
            'color_helper'                              => ' ',
            'kilometers'                                => 'Quilómetros',
            'kilometers_helper'                         => ' ',
            'seller_client'                             => 'Cliente Vendedor',
            'seller_client_helper'                      => ' ',
            'buyer_client'                              => 'Cliente Comprador',
            'buyer_client_helper'                       => ' ',
            'purchase_and_sale_agreement'               => 'Contrato de Compra e Venda',
            'purchase_and_sale_agreement_helper'        => ' ',
            'copy_of_the_citizen_card'                  => 'Cópia do Cartão de Cidadão',
            'copy_of_the_citizen_card_helper'           => ' ',
            'tax_identification_card'                   => 'Cartão de Identificação Fiscal',
            'tax_identification_card_helper'            => ' ',
            'copy_of_the_stamp_duty_receipt'            => 'Cópia do Recibo do Imposto de Selo',
            'copy_of_the_stamp_duty_receipt_helper'     => ' ',
            'vehicle_registration_document'             => 'Documento de Registo do Veículo',
            'vehicle_registration_document_helper'      => ' ',
            'vehicle_ownership_title'                   => 'Título de Propriedade do Veículo',
            'vehicle_ownership_title_helper'            => ' ',
            'vehicle_keys'                              => 'Chaves do Veículo',
            'vehicle_keys_helper'                       => ' ',
            'vehicle_manuals'                           => 'Manuais do Veículo',
            'vehicle_manuals_helper'                    => ' ',
            'release_of_reservation_or_mortgage'        => 'Liberação de Reserva ou Hipoteca',
            'release_of_reservation_or_mortgage_helper' => ' ',
            'leasing_agreement'                         => 'Contrato de Leasing',
            'leasing_agreement_helper'                  => ' ',
            'date'                                      => 'Data',
            'date_helper'                               => ' ',
            'pending'                                   => 'Pendente',
            'pending_helper'                            => ' ',
            'additional_items'                          => 'Itens Adicionais',
            'additional_items_helper'                   => ' ',
            'created_at'                                => 'Criado em',
            'created_at_helper'                         => ' ',
            'updated_at'                                => 'Atualizado em',
            'updated_at_helper'                         => ' ',
            'deleted_at'                                => 'Eliminado em',
            'deleted_at_helper'                         => ' ',
            'documents'                                 => 'Documentos',
            'documents_helper'                          => ' ',
            'purchase_price'                            => 'Preço de Compra',
            'purchase_price_helper'                     => ' ',
            'photos'                                    => 'Fotos',
            'photos_helper'                             => ' ',
            'suplier'                                   => 'Fornecedor',
            'suplier_helper'                            => ' ',
            'invoice'                                   => 'Fatura',
            'invoice_helper'                            => ' ',
            'payment_date'                              => 'Data de Pagamento',
            'payment_date_helper'                       => ' ',
            'payment_status'                            => 'Estado do Pagamento',
            'payment_status_helper'                     => ' ',
            'amount_paid'                               => 'Montante Pago',
            'amount_paid_helper'                        => ' ',
            'inicial'                                   => 'Inicial',
            'inicial_helper'                            => ' ',
            'carrier'                                   => 'Transportadora',
            'carrier_helper'                            => ' ',
            'storage_location'                          => 'Local de Armazenamento',
            'storage_location_helper'                   => ' ',
            'withdrawal_authorization'                  => 'Autorização de Levantamento',
            'withdrawal_authorization_helper'           => ' ',
            'withdrawal_authorization_file'             => 'Ficheiro de Autorização de Levantamento',
            'withdrawal_authorization_file_helper'      => ' ',
            'withdrawal_authorization_date'             => 'Data de Autorização de Levantamento',
            'withdrawal_authorization_date_helper'      => ' ',
            'withdrawal_documents'                      => 'Documentos de Levantamento',
            'withdrawal_documents_helper'               => ' ',
            'pickup_state'                              => 'Estado de Recolha',
            'pickup_state_helper'                       => ' ',
            'pickup_state_date'                         => 'Data de Estado de Recolha',
            'pickup_state_date_helper'                  => ' ',
            'fuel'                                      => 'Combustível',
            'fuel_helper'                               => ' ',
            'cables'                                    => 'Cabos',
            'cables_helper'                             => ' ',
            'version'                                   => 'Versão',
            'version_helper'                            => ' ',
            'inspec_b'                                  => 'Inspeção B',
            'inspec_b_helper'                           => ' ',
            'total_price'                               => 'Preço Total',
            'total_price_helper'                        => ' ',
            'minimum_price'                             => 'Preço Mínimo',
            'minimum_price_helper'                      => ' ',
            'pvp'                                       => 'PVP',
            'pvp_helper'                                => ' ',
            'client'                                    => 'Cliente',
            'client_helper'                             => ' ',
            'client_registration'                       => 'Registo de Cliente',
            'client_registration_helper'                => ' ',
            'chekin_documents'                          => 'Documentos de Check-in',
            'chekin_documents_helper'                   => ' ',
            'chekin_date'                               => 'Data de Check-in',
            'chekin_date_helper'                        => ' ',
            'sale_date'                                 => 'Data de Venda',
            'sale_date_helper'                          => ' ',
            'sele_chekout'                              => 'Check-out de Venda',
            'sele_chekout_helper'                       => ' ',
            'first_key'                                 => 'Primeira Chave',
            'first_key_helper'                          => ' ',
            'scuts'                                     => 'SCUTs',
            'scuts_helper'                              => ' ',
            'key'                                       => 'Chave',
            'key_helper'                                => ' ',
            'manuals'                                   => 'Manuais',
            'manuals_helper'                            => ' ',
            'elements_with_vehicle'                     => 'Elementos com o Veículo',
            'elements_with_vehicle_helper'              => ' ',
            'sale_notes'                                => 'Notas de Venda',
            'sale_notes_helper'                         => ' ',
            'local'                                     => 'Local',
            'local_helper'                              => ' ',
            'client_amount_paid'                        => 'Montante Pago pelo Cliente',
            'client_amount_paid_helper'                 => ' ',
        ],
    ],
    'suplier' => [
        'title'          => 'Fornecedores',
        'title_singular' => 'Fornecedor',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'name'              => 'Nome',
            'name_helper'       => ' ',
            'created_at'        => 'Criado em',
            'created_at_helper' => ' ',
            'updated_at'        => 'Atualizado em',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Eliminado em',
            'deleted_at_helper' => ' ',
        ],
    ],
    'paymentStatus' => [
        'title'          => 'Estado do Pagamento',
        'title_singular' => 'Estado do Pagamento',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'name'              => 'Nome',
            'name_helper'       => ' ',
            'created_at'        => 'Criado em',
            'created_at_helper' => ' ',
            'updated_at'        => 'Atualizado em',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Eliminado em',
            'deleted_at_helper' => ' ',
        ],
    ],
    'carrier' => [
        'title'          => 'Transportadoras',
        'title_singular' => 'Transportadora',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'name'              => 'Nome',
            'name_helper'       => ' ',
            'created_at'        => 'Criado em',
            'created_at_helper' => ' ',
            'updated_at'        => 'Atualizado em',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Eliminado em',
            'deleted_at_helper' => ' ',
        ],
    ],
    'pickupState' => [
        'title'          => 'Estado de Recolha',
        'title_singular' => 'Estado de Recolha',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'name'              => 'Nome',
            'name_helper'       => ' ',
            'created_at'        => 'Criado em',
            'created_at_helper' => ' ',
            'updated_at'        => 'Atualizado em',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Eliminado em',
            'deleted_at_helper' => ' ',
        ],
    ],
    'acquisition' => [
        'title'          => 'Aquisições',
        'title_singular' => 'Aquisição',
    ],
    'expedition' => [
        'title'          => 'Expedições',
        'title_singular' => 'Expedição',
    ],
    'sale' => [
        'title'          => 'Vendas',
        'title_singular' => 'Venda',
    ],

];
