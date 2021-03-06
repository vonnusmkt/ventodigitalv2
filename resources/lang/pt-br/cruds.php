<?php

return [
    'userManagement' => [
        'title'          => 'Gestão Admin',
        'title_singular' => 'Gestão Admin',
    ],
    'permission' => [
        'title'          => 'Permissões',
        'title_singular' => 'Permissão',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'title'             => 'Title',
            'title_helper'      => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => ' ',
        ],
    ],
    'role' => [
        'title'          => 'Hierarquias',
        'title_singular' => 'Hierarquia',
        'fields'         => [
            'id'                 => 'ID',
            'id_helper'          => ' ',
            'title'              => 'Title',
            'title_helper'       => ' ',
            'permissions'        => 'Permissions',
            'permissions_helper' => ' ',
            'created_at'         => 'Created at',
            'created_at_helper'  => ' ',
            'updated_at'         => 'Updated at',
            'updated_at_helper'  => ' ',
            'deleted_at'         => 'Deleted at',
            'deleted_at_helper'  => ' ',
        ],
    ],
    'user' => [
        'title'          => 'Usuários',
        'title_singular' => 'Usuário',
        'fields'         => [
            'id'                       => 'ID',
            'id_helper'                => ' ',
            'name'                     => 'Name',
            'name_helper'              => ' ',
            'email'                    => 'Email',
            'email_helper'             => ' ',
            'email_verified_at'        => 'Email verified at',
            'email_verified_at_helper' => ' ',
            'password'                 => 'Password',
            'password_helper'          => ' ',
            'roles'                    => 'Roles',
            'roles_helper'             => ' ',
            'remember_token'           => 'Remember Token',
            'remember_token_helper'    => ' ',
            'created_at'               => 'Created at',
            'created_at_helper'        => ' ',
            'updated_at'               => 'Updated at',
            'updated_at_helper'        => ' ',
            'deleted_at'               => 'Deleted at',
            'deleted_at_helper'        => ' ',
        ],
    ],
    'basicCRM' => [
        'title'          => 'AERO',
        'title_singular' => 'AERO',
    ],
    'crmStatus' => [
        'title'          => 'PAX',
        'title_singular' => 'PAX',
        'fields'         => [
            'id'                  => 'ID',
            'id_helper'           => ' ',
            'name'                => 'Passageiro',
            'name_helper'         => ' ',
            'created_at'          => 'Created at',
            'created_at_helper'   => ' ',
            'updated_at'          => 'Updated At',
            'updated_at_helper'   => ' ',
            'deleted_at'          => 'Deleted At',
            'deleted_at_helper'   => ' ',
            'data'                => 'Data',
            'data_helper'         => ' ',
            'status'              => 'Status',
            'status_helper'       => ' ',
            'companhia'           => 'Companhia',
            'companhia_helper'    => ' ',
            'origem'              => 'Origem',
            'origem_helper'       => ' ',
            'destino'             => 'Destino',
            'destino_helper'      => ' ',
            'cc'                  => 'CC',
            'cc_helper'           => ' ',
            'valor'               => 'Valor',
            'valor_helper'        => ' ',
            'reserva'             => 'Reserva',
            'reserva_helper'      => ' ',
            'file_bilhete'        => 'Bilhete',
            'file_bilhete_helper' => ' ',
        ],
    ],
    'crmCustomer' => [
        'title'          => 'CADASTROS',
        'title_singular' => 'CADASTRO',
        'fields'         => [
            'id'                 => 'ID',
            'id_helper'          => ' ',
            'first_name'         => 'First name',
            'first_name_helper'  => ' ',
            'last_name'          => 'Last name',
            'last_name_helper'   => ' ',
            'status'             => 'Status',
            'status_helper'      => ' ',
            'email'              => 'Email',
            'email_helper'       => ' ',
            'phone'              => 'Phone',
            'phone_helper'       => ' ',
            'address'            => 'Address',
            'address_helper'     => ' ',
            'skype'              => 'Skype',
            'skype_helper'       => ' ',
            'website'            => 'Website',
            'website_helper'     => ' ',
            'description'        => 'Description',
            'description_helper' => ' ',
            'created_at'         => 'Created at',
            'created_at_helper'  => ' ',
            'updated_at'         => 'Updated At',
            'updated_at_helper'  => ' ',
            'deleted_at'         => 'Deleted At',
            'deleted_at_helper'  => ' ',
        ],
    ],
    'crmNote' => [
        'title'          => 'Notes',
        'title_singular' => 'Note',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'customer'          => 'Customer',
            'customer_helper'   => ' ',
            'note'              => 'Note',
            'note_helper'       => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated At',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted At',
            'deleted_at_helper' => ' ',
        ],
    ],
    'crmDocument' => [
        'title'          => 'Documents',
        'title_singular' => 'Document',
        'fields'         => [
            'id'                   => 'ID',
            'id_helper'            => ' ',
            'customer'             => 'Customer',
            'customer_helper'      => ' ',
            'document_file'        => 'File',
            'document_file_helper' => ' ',
            'name'                 => 'Document name',
            'name_helper'          => ' ',
            'description'          => 'Description',
            'description_helper'   => ' ',
            'created_at'           => 'Created at',
            'created_at_helper'    => ' ',
            'updated_at'           => 'Updated At',
            'updated_at_helper'    => ' ',
            'deleted_at'           => 'Deleted At',
            'deleted_at_helper'    => ' ',
        ],
    ],
    'recurso' => [
        'title'          => 'Recursos',
        'title_singular' => 'Recurso',
    ],
    'cc' => [
        'title'          => 'CC',
        'title_singular' => 'CC',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'db_cc'             => 'N°',
            'db_cc_helper'      => ' ',
            'db_cvv'            => 'CVV',
            'db_cvv_helper'     => ' ',
            'db_band'           => 'Bandeira',
            'db_band_helper'    => ' ',
            'db_tipo'           => 'Tipo',
            'db_tipo_helper'    => ' ',
            'db_bank'           => 'Banco',
            'db_bank_helper'    => ' ',
            'db_tested'         => 'Status',
            'db_tested_helper'  => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => ' ',
            'db_exp'            => 'Val.',
            'db_exp_helper'     => ' ',
        ],
    ],
    'contum' => [
        'title'          => 'Contas',
        'title_singular' => 'Conta',
        'fields'         => [
            'id'                            => 'ID',
            'id_helper'                     => ' ',
            'db_services'                   => 'Serviço',
            'db_services_helper'            => ' ',
            'db_res_user'                   => 'Login',
            'db_res_user_helper'            => ' ',
            'db_res_accounts_status'        => 'Status',
            'db_res_accounts_status_helper' => ' ',
            'created_at'                    => 'Created at',
            'created_at_helper'             => ' ',
            'updated_at'                    => 'Updated at',
            'updated_at_helper'             => ' ',
            'deleted_at'                    => 'Deleted at',
            'deleted_at_helper'             => ' ',
            'db_res_accounts_pass'          => 'Senha',
            'db_res_accounts_pass_helper'   => ' ',
            'db_res_accounts_emails'        => 'Email',
            'db_res_accounts_emails_helper' => ' ',
        ],
    ],
    'email' => [
        'title'          => 'Emails',
        'title_singular' => 'Email',
        'fields'         => [
            'id'                           => 'ID',
            'id_helper'                    => ' ',
            'db_res_email_provider'        => 'Provedor',
            'db_res_email_provider_helper' => ' ',
            'db_res_email'                 => 'Email',
            'db_res_email_helper'          => ' ',
            'created_at'                   => 'Created at',
            'created_at_helper'            => ' ',
            'updated_at'                   => 'Updated at',
            'updated_at_helper'            => ' ',
            'deleted_at'                   => 'Deleted at',
            'deleted_at_helper'            => ' ',
            'db_res_email_pass'            => 'Senha',
            'db_res_email_pass_helper'     => ' ',
        ],
    ],
];
