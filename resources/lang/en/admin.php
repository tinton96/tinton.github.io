<?php

return [
    'admin-user' => [
        'title' => 'Users',

        'actions' => [
            'index' => 'Users',
            'create' => 'New User',
            'edit' => 'Edit :name',
            'edit_profile' => 'Edit Profile',
            'edit_password' => 'Edit Password',
        ],

        'columns' => [
            'id' => 'ID',
            'last_login_at' => 'Last login',
            'first_name' => 'First name',
            'last_name' => 'Last name',
            'email' => 'Email',
            'password' => 'Password',
            'password_repeat' => 'Password Confirmation',
            'activated' => 'Activated',
            'forbidden' => 'Forbidden',
            'language' => 'Language',
                
            //Belongs to many relations
            'roles' => 'Roles',
                
        ],
    ],

    'portofolio' => [
        'title' => 'Portofolio',

        'actions' => [
            'index' => 'Portofolio',
            'create' => 'New Portofolio',
            'edit' => 'Edit :name',
            'will_be_published' => 'Portofolio will be published at',
        ],

        'columns' => [
            'id' => 'ID',
            'nama project' => 'Nama project',
            'slug' => 'Slug',
            'text' => 'Text',
            'published_at' => 'Published at',
            'enabled' => 'Enabled',
            
        ],
    ],

    'team' => [
        'title' => 'Team',

        'actions' => [
            'index' => 'Team',
            'create' => 'New Team',
            'edit' => 'Edit :name',
            'will_be_published' => 'Team will be published at',
        ],

        'columns' => [
            'id' => 'ID',
            'nama' => 'Nama',
            'slug' => 'Slug',
            'biodata' => 'Biodata',
            'published_at' => 'Published at',
            'enabled' => 'Enabled',
            
        ],
    ],

    'portofolio' => [
        'title' => 'Portofolio',

        'actions' => [
            'index' => 'Portofolio',
            'create' => 'New Portofolio',
            'edit' => 'Edit :name',
            'will_be_published' => 'Portofolio will be published at',
        ],

        'columns' => [
            'id' => 'ID',
            'nama project' => 'Nama project',
            'slug' => 'Slug',
            'text' => 'Text',
            'published_at' => 'Published at',
            'enabled' => 'Enabled',
            
        ],
    ],

    'portofolio' => [
        'title' => 'Portofolio',

        'actions' => [
            'index' => 'Portofolio',
            'create' => 'New Portofolio',
            'edit' => 'Edit :name',
            'will_be_published' => 'Portofolio will be published at',
        ],

        'columns' => [
            'id' => 'ID',
            'nama_project' => 'Nama project',
            'slug' => 'Slug',
            'text' => 'Text',
            'published_at' => 'Published at',
            'enabled' => 'Enabled',
            
        ],
    ],

    'portofolio' => [
        'title' => 'Portofolio',

        'actions' => [
            'index' => 'Portofolio',
            'create' => 'New Portofolio',
            'edit' => 'Edit :name',
            'will_be_published' => 'Portofolio will be published at',
        ],

        'columns' => [
            'id' => 'ID',
            'project' => 'Project',
            'slug' => 'Slug',
            'text' => 'Text',
            'published_at' => 'Published at',
            'enabled' => 'Enabled',
            
        ],
    ],

    'pegawai' => [
        'title' => 'Pegawai',

        'actions' => [
            'index' => 'Pegawai',
            'create' => 'New Pegawai',
            'edit' => 'Edit :name',
        ],

        'columns' => [
            'id' => 'ID',
            'nama_pegawai' => 'Nama pegawai',
            'no_telpon' => 'No telpon',
            'alamat' => 'Alamat',
            'tanngal_lahir' => 'Tanngal lahir',
            'status_karyawan' => 'Status karyawan',
            'jabatan' => 'Jabatan',
            
        ],
    ],

    // Do not delete me :) I'm used for auto-generation
];