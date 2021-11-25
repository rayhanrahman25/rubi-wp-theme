<?php
define( 'RUBI_CUSTOMIZER_ID', 'rubi_customizer_settings' );
define( 'RUBI_CUSTOMIZER_PANEL_ID', 'rubi_customizer_panel' );
if ( class_exists( 'kirki' ) ) {
    //======= config settings ====
    Kirki::add_config( RUBI_CUSTOMIZER_ID, array(
        'capability'  => 'edit_theme_options',
        'option_type' => 'theme_mod',
    ) );
    //======== panel settings========
    Kirki::add_panel( RUBI_CUSTOMIZER_PANEL_ID, array(
        'priority'    => 10,
        'title'       => esc_html__( 'RUBI SETTINGS', 'rubi' ),
        'description' => esc_html__( 'rubi settings', 'rubi' ),
    ) );
    //========================== banner section =========================================
    Kirki::add_section( 'rubi_banner_id', array(
        'title'    => esc_html__( 'Banner Section', 'rubi' ),
        'panel'    => RUBI_CUSTOMIZER_PANEL_ID,
        'priority' => 160,
    ) );
    //============= banner controls ===============

    //-------- background Image contor ---------
    Kirki::add_field( RUBI_CUSTOMIZER_ID, [
        'type'        => 'image',
        'settings'    => 'rubi_banner_background_img',
        'label'       => esc_html__( 'Banner Background Image', 'rubi' ),
        'description' => esc_html__( 'Description Here.', 'rubi' ),
        'section'     => 'rubi_banner_id',
        'default'     => '10',
    ] );
    Kirki::add_field( RUBI_CUSTOMIZER_ID, [
        'type'        => 'text',
        'settings'    => 'rubi_banner_heading',
        'label'       => esc_html__( 'Write Heading', 'rubi' ),
        'description' => esc_html__( 'Description Here.', 'rubi' ),
        'section'     => 'rubi_banner_id',
        'default'     => 'I Provide',
    ] );
    Kirki::add_field( RUBI_CUSTOMIZER_ID, [
        'type'        => 'text',
        'settings'    => 'rubi_banner_auto_heading_1',
        'label'       => esc_html__( 'Write Functional Heading One', 'rubi' ),
        'description' => esc_html__( 'Description Here.', 'rubi' ),
        'section'     => 'rubi_banner_id',
        'default'     => 'Design solutions. ',
    ] );
    Kirki::add_field( RUBI_CUSTOMIZER_ID, [
        'type'        => 'text',
        'settings'    => 'rubi_banner_auto_heading_2',
        'label'       => esc_html__( 'Write Functional Heading Two', 'rubi' ),
        'description' => esc_html__( 'Description Here.', 'rubi' ),
        'section'     => 'rubi_banner_id',
        'default'     => 'Creative Ideas.',
    ] );
    Kirki::add_field( RUBI_CUSTOMIZER_ID, [
        'type'        => 'textarea',
        'settings'    => 'rubi_banner_description',
        'label'       => esc_html__( 'Banner Description', 'rubi' ),
        'description' => esc_html__( 'Description Here.', 'rubi' ),
        'section'     => 'rubi_banner_id',
        'default'     => '',
    ] );

    Kirki::add_field(  RUBI_CUSTOMIZER_ID, [
        'type'        => 'repeater',
        'label'       => esc_attr__( 'Social Links', 'rubi' ),
        'section'     => 'rubi_banner_id',
        'priority'    => 10,
        'settings'    => 'social_repeater_settings',
        'button_label' => esc_html__('Add New Social Link', 'kirki' ),
        'row_label' => [
            'type'  => 'field',
            'value' => esc_html__( 'Social Links', 'rubi' ),
            'field' => 'social_field',
        ],
        'fields' => [
            'social_field' => [
                'type'        => 'text',
                'label'       => esc_attr__( 'Social Name', 'Rubi' ),
                'description' => esc_attr__( 'By write name you can add your favourite social meadia', 'Rubi' ),
                'default'=>'facebook'
            ],
        ]
    ] );
    Kirki::add_field( RUBI_CUSTOMIZER_ID, [
        'type'        => 'text',
        'settings'    => 'rubi_banner_btn_txt',
        'label'       => esc_html__( 'Button Text', 'rubi' ),
        'section'     => 'rubi_banner_id',
        'default'     => 'Learn More',
    ] );
    Kirki::add_field(  RUBI_CUSTOMIZER_ID, [
        'type'     => 'link',
        'settings' => 'rubi_banner_btn_link',
        'label'    => __( 'Link Control', 'kirki' ),
        'section'  => 'rubi_banner_id',
        'default'  => esc_url('#about'),
        'priority' => 10,
    ] );
}

//========================== about section =========================================
Kirki::add_section( 'rubi_about_id', array(
    'title'    => esc_html__( 'About Section', 'rubi' ),
    'panel'    => RUBI_CUSTOMIZER_PANEL_ID,
    'priority' => 160,
) );
Kirki::add_field( RUBI_CUSTOMIZER_ID, [
    'type'        => 'image',
    'settings'    => 'rubi_about_img',
    'label'       => esc_html__( 'Profile Image', 'rubi' ),
    'description' => esc_html__( 'Description Here.', 'rubi' ),
    'section'     => 'rubi_about_id',
    'default'     => '10',
] );
Kirki::add_field( RUBI_CUSTOMIZER_ID, [
    'type'        => 'text',
    'settings'    => 'rubi_about_heading',
    'label'       => esc_html__( 'About Heading', 'rubi' ),
    'section'     => 'rubi_about_id',
    'default'     => __('Designing with passion Thats work for you'),
] );
Kirki::add_field( RUBI_CUSTOMIZER_ID, [
    'type'        => 'textarea',
    'settings'    => 'rubi_about_pra',
    'label'       => esc_html__( 'Description', 'rubi' ),
    'section'     => 'rubi_about_id',
    'default'     => __('Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis aliquid accusamus veritatis quasi vero id libero, itaque et sequi, ipsa tempore officia delectus laudantium modi error nihil. Voluptatum'),
] );
Kirki::add_field(  RUBI_CUSTOMIZER_ID, [
    'type'        => 'repeater',
    'label'       => esc_attr__( 'Quality Services', 'rubi' ),
    'section'     => 'rubi_about_id',
    'priority'    => 10,
    'settings'    => 'quality_repeater_settings',
    'button_label' => esc_html__('Add New Quality', 'rubi' ),
    'row_label' => [
        'type'  => 'field',
        'value' => esc_html__( 'Quality', 'rubi' ),
        'field' => 'quality_field',
    ],
    'fields' => [
        'quality_field' => [
            'type'        => 'text',
            'label'       => esc_html( 'Quality Title', 'Rubi' ),
            'default'=>'Quality Assurance'
        ],
    ]
] );
Kirki::add_field( RUBI_CUSTOMIZER_ID, [
    'type'        => 'text',
    'settings'    => 'rubi_about_link_text',
    'label'       => esc_html__( 'Link Text', 'rubi' ),
    'section'     => 'rubi_about_id',
    'default'     => __('Services'),
] );
Kirki::add_field( RUBI_CUSTOMIZER_ID, [
    'type'        => 'link',
    'settings'    => 'rubi_about_link',
    'label'       => esc_html__( 'Enter Your Link', 'rubi' ),
    'section'     => 'rubi_about_id',
    'default'     => esc_url("#services"),
] );

//========================== specialize section =========================================

Kirki::add_section( 'rubi_specialized_area', array(
    'title'    => esc_html__( 'Specialize Section', 'rubi' ),
    'panel'    => RUBI_CUSTOMIZER_PANEL_ID,
    'priority' => 160,
) );
Kirki::add_field( RUBI_CUSTOMIZER_ID, [
    'type'        => 'text',
    'settings'    => 'rubi_specialized_text',
    'label'       => esc_html__( 'Link Text', 'rubi' ),
    'section'     => 'rubi_specialized_area',
    'default'     => __('Specialized Area'),
] );
Kirki::add_field(  RUBI_CUSTOMIZER_ID, [
    'type'        => 'repeater',
    'label'       => esc_attr__( 'Specialization', 'rubi' ),
    'section'     => 'rubi_specialized_area',
    'priority'    => 10,
    'settings'    => 'sp_repeater_settings',
    'button_label' => esc_html__('Add New Specialization', 'rubi' ),
    'row_label' => [
        'type'  => 'field',
        'value' => esc_html__( 'Splecialization', 'rubi' ),
        'field' => 'sp_field',
    ],
    'fields' => [
        'parcent_field' => [
            'type'        => 'text',
            'label'       => esc_html( 'Percentage', 'Rubi' ),
            'default'=> '100',
        ],
        'sp_title'=>[
            'type'        => 'text',
            'label'       => esc_html( 'Splecialization Title', 'Rubi' ),
            'default'=> __('Html/Css'), 
        ]
    ]
] );
//========================== services section =========================================

Kirki::add_section( 'rubi_serv_area', array(
    'title'    => esc_html__( 'Services Section', 'rubi' ),
    'panel'    => RUBI_CUSTOMIZER_PANEL_ID,
    'priority' => 160,
) );
Kirki::add_field( RUBI_CUSTOMIZER_ID, [
    'type'        => 'text',
    'settings'    => 'rubi_serv_head',
    'label'       => __( 'Section Title', 'rubi' ),
    'section'     => 'rubi_serv_area',
    'default'     => __('My services'),
] );
Kirki::add_field( RUBI_CUSTOMIZER_ID, [
    'type'        => 'textarea',
    'settings'    => 'rubi_serv_pra',
    'label'       => __( 'Title Des', 'rubi' ),
    'section'     => 'rubi_serv_area',
    'default'     => __('Omnis est dolores commodi ullam tempora sequi asperiores ipsum autem ex aliquam. Voluptatibus unde'),
] );
Kirki::add_field(  RUBI_CUSTOMIZER_ID, [
    'type'        => 'repeater',
    'label'       => esc_attr__( 'Services', 'rubi' ),
    'section'     => 'rubi_serv_area',
    'priority'    => 10,
    'settings'    => 'serv_repeater_settings',
    'button_label' => esc_html__('Add New Service', 'rubi' ),
    'row_label' => [
        'type'  => 'field',
        'value' => esc_html__( 'Services', 'rubi' ),
        'field' => 'serv_field',
    ],
    'fields' => [
        'icon_field' => [
            'type'        => 'text',
            'label'       => __( 'Icon Name', 'Rubi' ),
            'default'=> esc_attr('microphone'),
        ],
        'serv_title'=>[
            'type'        => 'text',
            'label'       => esc_html( 'Service Title', 'Rubi' ),
            'default'=> __('Branding'), 
        ],
        'serv_title_pra'=>[
            'type'        => 'text',
            'label'       => esc_html( 'Service Title Pragraph', 'Rubi' ),
            'default'=> __('Lorem ipsum dolor sit amet, consect etur adipisicing elit, sed.'), 
        ],
        'serv_link_text'=>[
            'type'        => 'text',
            'label'       => esc_html( 'Link Text', 'Rubi' ),
            'default'=> __('learn more'), 
        ],
        'serv_link'=>[
            'type'        => 'text',
            'label'       => esc_html( 'Service Link', 'Rubi' ),
            'default'=> esc_url('service-single.html'), 
        ],

    ]
] );
//========================== portfolio section =========================================
Kirki::add_section( 'rubi_portfolio_area', array(
    'title'    => esc_html__( 'Portfolio Section', 'rubi' ),
    'panel'    => RUBI_CUSTOMIZER_PANEL_ID,
    'priority' => 160,
) );
Kirki::add_field( RUBI_CUSTOMIZER_ID, [
    'type'        => 'text',
    'settings'    => 'rubi_port_head',
    'label'       => __( 'Section Title', 'rubi' ),
    'section'     => 'rubi_portfolio_area',
    'default'     => __('Work Portfolio'),
] );
Kirki::add_field( RUBI_CUSTOMIZER_ID, [
    'type'        => 'textarea',
    'settings'    => 'rubi_port_pra',
    'label'       => __( 'Section Title para', 'rubi' ),
    'section'     => 'rubi_portfolio_area',
    'default'     => __('Omnis est dolores commodi ullam tempora sequi asperiores ipsum autem ex aliquam. Voluptatibus unde'),
] );
//---------- portfoloi navigation settings
Kirki::add_field(  RUBI_CUSTOMIZER_ID, [
    'type'        => 'repeater',
    'label'       => esc_attr__( 'Services', 'rubi' ),
    'section'     => 'rubi_portfolio_area',
    'priority'    => 10,
    'settings'    => 'prot_nav_repeater_settings',
    'button_label' => esc_html__('Add New Category', 'rubi' ),
    'row_label' => [
        'type'  => 'field',
        'value' => esc_html__( 'Category', 'rubi' ),
        'field' => 'prot_nav_field',
    ],
    'fields' => [
        'm_val' => [
            'type'        => 'text',
            'label'       => __( 'Category Value', 'Rubi' ),
            'description'=>__('write category value name without any space or comma'),
            'default'=> esc_attr('all'),
        ],
        's_val'=>[
            'type'        => 'text',
            'label'       => esc_html( 'Category', 'Rubi' ),
            'default'=> __('ALL'), 
        ],
    ]
] );

//---------- Add New Portfolio settings
Kirki::add_field(  RUBI_CUSTOMIZER_ID, [
    'type'        => 'repeater',
    'label'       => esc_attr__( 'Add New Port Folio Information', 'rubi' ),
    'section'     => 'rubi_portfolio_area',
    'priority'    => 10,
    'settings'    => 'add_port_repeater_settings',
    'button_label' => esc_html__('Add New Portfolio', 'rubi' ),
    'row_label' => [
        'type'  => 'field',
        'value' => esc_html__( 'Add Portfolio Settings', 'rubi' ),
        'field' => 'prot_feat_field',
    ],
    'fields' => [
        'cat_name' => [
            'type'        => 'text',
            'label'       => __( 'Category Name', 'Rubi' ),
            'description'=>__('write category like (apple,banana,orange)'),
            'default'=> esc_attr('all'),
        ],
        'port_title'=>[
            'type'        => 'text',
            'label'       => esc_html( 'Portfolio Title', 'Rubi' ),
            'default'=> __('Minimal Portfolio Theme'), 
        ],
        'port_img'=>[
            'type'        => 'image',
            'label'       => esc_html( 'Portfolio Title', 'Rubi' ),
            'default'=> __('Minimal Portfolio Theme'), 
        ],
        'port_link'=>[
            'type'        => 'link',
            'label'       => esc_html( 'Portfolio Link', 'Rubi' ),
            'default'=> esc_url('portfolio-single.html'), 
        ],
    ]
] );
Kirki::add_field( RUBI_CUSTOMIZER_ID, [
    'type'        => 'text',
    'settings'    => 'rubi_port_link_tit',
    'label'       => __( 'Button Title', 'rubi' ),
    'section'     => 'rubi_portfolio_area',
    'default'     => __('Read Success Story'),
] );
Kirki::add_field( RUBI_CUSTOMIZER_ID, [
    'type'        => 'link',
    'settings'    => 'rubi_port_tit_link',
    'label'       => __( 'Button Link', 'rubi' ),
    'section'     => 'rubi_portfolio_area',
    'default'     => esc_url('#testimonial'),
] );
//========================== Work Exp Section =========================================

Kirki::add_section( 'rubi_work_exp_area', array(
    'title'    => esc_html__( 'Work Experience Section', 'rubi' ),
    'panel'    => RUBI_CUSTOMIZER_PANEL_ID,
    'priority' => 160,
) );
Kirki::add_field( RUBI_CUSTOMIZER_ID, [
    'type'        => 'text',
    'settings'    => 'rubi_workexp_tit',
    'label'       => __( 'Section Title', 'rubi' ),
    'section'     => 'rubi_work_exp_area',
    'default'     => __('Work Experience'),
] );
//---------- Add New Portfolio settings
Kirki::add_field(  RUBI_CUSTOMIZER_ID, [
    'type'        => 'repeater',
    'label'       => esc_attr__( 'Add New Work Experience', 'rubi' ),
    'section'     => 'rubi_work_exp_area',
    'priority'    => 10,
    'settings'    => 'add_workexp_repeater_settings',
    'button_label' => esc_html__('Add New Work Experience', 'rubi' ),
    'row_label' => [
        'type'  => 'field',
        'value' => esc_html__( 'Add New Work Experience', 'rubi' ),
        'field' => 'workex_field',
    ],
    'fields' => [
        'work_position' => [
            'type'        => 'text',
            'label'       => __( 'Work Position Title', 'Rubi' ),
            'default'=> esc_attr('Web Developer'),
        ],
        'company_name'=>[
            'type'        => 'text',
            'label'       => esc_html( 'Company Name', 'Rubi' ),
            'default'=> __('Googl inc[2000-2004]'), 
        ],
        'job_des'=>[
            'type'        => 'textarea',
            'label'       => esc_html( 'Describe Someting', 'Rubi' ),
            'default'=> __('Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore.'), 
        ],
    ]
] );
//==========================  Counter Section =========================================
Kirki::add_section( 'rubi_counter_area', array(
    'title'    => esc_html__( 'Happy Clients Section', 'rubi' ),
    'panel'    => RUBI_CUSTOMIZER_PANEL_ID,
    'priority' => 160,
) );
Kirki::add_field(  RUBI_CUSTOMIZER_ID, [
    'type'        => 'repeater',
    'label'       => esc_attr__( 'Add New Counter', 'rubi' ),
    'section'     => 'rubi_counter_area',
    'priority'    => 10,
    'settings'    => 'add_counter_settings',
    'button_label' => esc_html__('Add New Counter', 'rubi' ),
    'row_label' => [
        'type'  => 'field',
        'value' => esc_html__( 'Add New Counter', 'rubi' ),
        'field' => 'counter_field',
    ],
    'fields' => [
        'icon_text' => [
            'type'        => 'text',
            'label'       => __( 'write your icon name', 'Rubi' ),
            'default'=> esc_attr('user'),
        ],
        'counter_num'=>[
            'type'        => 'text',
            'label'       => esc_html( 'Write Counter Nubmers', 'Rubi' ),
            'default'=> __('763'), 
        ],
        'counter_title'=>[
            'type'        => 'text',
            'label'       => esc_html( 'Counter Title', 'Rubi' ),
            'default'=> __('Happy Clients'), 
        ],
    ]
] );
//========================== Team Section =========================================
Kirki::add_section( 'rubi_team_area', array(
    'title'    => esc_html__( 'Our Team', 'rubi' ),
    'panel'    => RUBI_CUSTOMIZER_PANEL_ID,
    'priority' => 160,
) );
Kirki::add_field( RUBI_CUSTOMIZER_ID, [
    'type'        => 'text',
    'settings'    => 'rubi_team_tit',
    'label'       => __( 'Section Title', 'rubi' ),
    'section'     => 'rubi_team_area',
    'default'     => __('Our Team'),
] );
Kirki::add_field( RUBI_CUSTOMIZER_ID, [
    'type'        => 'textarea',
    'settings'    => 'rubi_team_des',
    'label'       => __( 'Section des', 'rubi' ),
    'section'     => 'rubi_team_area',
    'default'     => __('Omnis est dolores commodi ullam tempora sequi asperiores ipsum autem ex aliquam. Voluptatibus unde'),
] );

Kirki::add_field(  RUBI_CUSTOMIZER_ID, [
    'type'        => 'repeater',
    'label'       => esc_attr__( 'Add New Member', 'rubi' ),
    'section'     => 'rubi_team_area',
    'priority'    => 10,
    'settings'    => 'add_team_settings',
    'button_label' => esc_html__('Add New Member', 'rubi' ),
    'row_label' => [
        'type'  => 'field',
        'value' => esc_html__( 'Add New Member', 'rubi' ),
        'field' => 'team_field',
    ],
    'fields' => [
        'team_pro_img' => [
            'type'        => 'image',
            'label'       => __( 'Member Profile Image', 'Rubi' ),
        ],
        'work_position'=>[
            'type'        => 'text',
            'label'       => esc_html( 'Job Title', 'Rubi' ),
            'default'=> __('Founder'), 
        ],
        'member_name'=>[
            'type'        => 'text',
            'label'       => esc_html( 'Member Name', 'Rubi' ),
            'default'=> __('Richard William'), 
        ],
        'member_des'=>[
            'type'        => 'textarea',
            'label'       => esc_html( 'Member Description', 'Rubi' ),
            'default'=> __('Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloremque, molestiae.'), 
        ],
        'facebook'=>[
            'type'        => 'text',
            'label'       => esc_html( 'Facebook', 'Rubi' ),
            'default'=> __('facebook'), 
        ],
        'twitter'=>[
            'type'        => 'text',
            'label'       => esc_html( 'Twitter', 'Rubi' ),
            'default'=> __('twitter'), 
        ],
        'linkedin'=>[
            'type'        => 'text',
            'label'       => esc_html( 'Linkedin', 'Rubi' ),
            'default'=> __('linkedin'), 
        ],
        
    ]
] );
//========================== Solution Section =========================================
Kirki::add_section( 'rubi_solution_area', array(
    'title'    => esc_html__( 'Solution', 'rubi' ),
    'panel'    => RUBI_CUSTOMIZER_PANEL_ID,
    'priority' => 160,
) );
Kirki::add_field( RUBI_CUSTOMIZER_ID, [
    'type'        => 'text',
    'settings'    => 'rubi_sol_stit',
    'label'       => __( ' Sub Title', 'rubi' ),
    'section'     => 'rubi_solution_area',
    'default'     => __('All in one Solution'),
] );
Kirki::add_field( RUBI_CUSTOMIZER_ID, [
    'type'        => 'text',
    'settings'    => 'rubi_sol_tit',
    'label'       => __( ' Title', 'rubi' ),
    'section'     => 'rubi_solution_area',
    'default'     => __('Have any Project on mind?'),
] );
Kirki::add_field( RUBI_CUSTOMIZER_ID, [
    'type'        => 'link',
    'settings'    => 'rubi_sol_blink',
    'label'       => __( ' Button Link', 'rubi' ),
    'section'     => 'rubi_solution_area',
    'default'     => esc_url('#contact'),
] );
Kirki::add_field( RUBI_CUSTOMIZER_ID, [
    'type'        => 'text',
    'settings'    => 'rubi_sol_btit',
    'label'       => __( ' Button Title', 'rubi' ),
    'section'     => 'rubi_solution_area',
    'default'     => __('Contact Me'),
] );
//================================== Blog Section Section =========================================
Kirki::add_section( 'rubi_blog_area', array(
    'title'    => esc_html__( 'Blog Section', 'rubi' ),
    'panel'    => RUBI_CUSTOMIZER_PANEL_ID,
    'priority' => 160,
) );
Kirki::add_field( RUBI_CUSTOMIZER_ID, [
    'type'        => 'text',
    'settings'    => 'rubi_blogSection_tit',
    'label'       => __( 'Title', 'rubi' ),
    'section'     => 'rubi_blog_area',
    'default'     => __('News Feed
    '),
] );
Kirki::add_field( RUBI_CUSTOMIZER_ID, [
    'type'        => 'textarea',
    'settings'    => 'rubi_blogSection_des',
    'label'       => __( 'Title', 'rubi' ),
    'section'     => 'rubi_blog_area',
    'default'     => __('Omnis est dolores commodi ullam tempora sequi asperiores ipsum autem ex aliquam. Voluptatibus unde

    '),
] );
//================================== Testimonial Section =========================================
Kirki::add_section( 'rubi_testimonial_area', array(
    'title'    => esc_html__( 'Testimonial Section', 'rubi' ),
    'panel'    => RUBI_CUSTOMIZER_PANEL_ID,
    'priority' => 160,
) );
Kirki::add_field( RUBI_CUSTOMIZER_ID, [
    'type'        => 'text',
    'settings'    => 'rubi_testi_tit',
    'label'       => __( 'Title', 'rubi' ),
    'section'     => 'rubi_testimonial_area',
    'default'     => __('Clients says'),
] );
Kirki::add_field( RUBI_CUSTOMIZER_ID, [
    'type'        => 'text',
    'settings'    => 'rubi_testi_des',
    'label'       => __( 'Description', 'rubi' ),
    'section'     => 'rubi_testimonial_area',
    'default'     => __('Reiciendis, reprehenderit, quas impedit ea repudiandae non quibusdam nulla pariatur rerum numquam ipsum corporis, dignissimos aliquid, neque. Recusandae voluptas, inventore error amet.'),
] );
Kirki::add_field( RUBI_CUSTOMIZER_ID, [
    'type'        => 'text',
    'settings'    => 'rubi_testi_btn_tit',
    'label'       => __( 'Title', 'rubi' ),
    'section'     => 'rubi_testimonial_area',
    'default'     => __('Get Started'),
] );
Kirki::add_field( RUBI_CUSTOMIZER_ID, [
    'type'        => 'link',
    'settings'    => 'rubi_testi_btn_link',
    'label'       => __( 'Button Link', 'rubi' ),
    'section'     => 'rubi_testimonial_area',
    'default'     => esc_url('#contact'),
] );
Kirki::add_field(  RUBI_CUSTOMIZER_ID, [
    'type'        => 'repeater',
    'label'       => esc_attr__( 'Add New Testimonial', 'rubi' ),
    'section'     => 'rubi_testimonial_area',
    'priority'    => 10,
    'settings'    => 'add_testimonial_settings',
    'button_label' => esc_html__('Add New Testimonial', 'rubi' ),
    'row_label' => [
        'type'  => 'field',
        'value' => esc_html__( 'Add New Testimonial', 'rubi' ),
        'field' => 'testimonial_field',
    ],
    'fields' => [
        'pro_img' => [
            'type'        => 'image',
            'label'       => __( 'Set You Profile Image', 'Rubi' ),
            'default'=> esc_attr('user'),
        ],
        'test_topic'=>[
            'type'        => 'text',
            'label'       => esc_html( 'Write Counter Nubmers', 'Rubi' ),
            'default'=> __('Code Quality!'), 
        ],
        'test_description'=>[
            'type'        => 'text',
            'label'       => esc_html( 'Counter Title', 'Rubi' ),
            'default'=> __('Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis architecto vel nesciunt accusamus quidem fugiat molestiae doloribus .'), 
        ],
        'test_name'=>[
            'type'        => 'text',
            'label'       => esc_html( 'Counter Title', 'Rubi' ),
            'default'=> __('Khalid Farhan'), 
        ],
        'test_company'=>[
            'type'        => 'text',
            'label'       => esc_html( 'Counter Title', 'Rubi' ),
            'default'=> __('Themeturn'), 
        ],
    ]
] );

//================================== Contact Section =========================================
Kirki::add_section( 'rubi_contact_area', array(
    'title'    => esc_html__( 'Testimonial Section', 'rubi' ),
    'panel'    => RUBI_CUSTOMIZER_PANEL_ID,
    'priority' => 160,
) );
Kirki::add_field( RUBI_CUSTOMIZER_ID, [
    'type'        => 'text',
    'settings'    => 'rubi_contact_tit',
    'label'       => __( 'Title', 'rubi' ),
    'section'     => 'rubi_contact_area',
    'default'     => __('Let\'s Get started'),
] );
Kirki::add_field( RUBI_CUSTOMIZER_ID, [
    'type'        => 'text',
    'settings'    => 'rubi_contact_des',
    'label'       => __( 'Description', 'rubi' ),
    'section'     => 'rubi_contact_area',
    'default'     => __('Omnis est dolores commodi ullam tempora sequi asperiores ipsum autem ex aliquam. Voluptatibus unde'),
] );
//================================== Footer Section =========================================

Kirki::add_section( 'rubi_footer_area', array(
    'title'    => esc_html__( 'Footer Section', 'rubi' ),
    'panel'    => RUBI_CUSTOMIZER_PANEL_ID,
    'priority' => 160,
) );
Kirki::add_field( RUBI_CUSTOMIZER_ID, [
    'type'        => 'text',
    'settings'    => 'rubi_footer_tit',
    'label'       => __( 'Title', 'rubi' ),
    'section'     => 'rubi_footer_area',
    'default'     => __('Rubi.'),
] );
Kirki::add_field( RUBI_CUSTOMIZER_ID, [
    'type'        => 'text',
    'settings'    => 'rubi_footer_des',
    'label'       => __( 'description', 'rubi' ),
    'section'     => 'rubi_footer_area',
    'default'     => __('Minimal & Crative Portfolio/CV/Biodata Solution in One Platform'),
] );
Kirki::add_field( RUBI_CUSTOMIZER_ID, [
    'type'        => 'text',
    'settings'    => 'rubi_footer_mail',
    'label'       => __( 'Your Email Address', 'rubi' ),
    'section'     => 'rubi_footer_area',
    'default'     => __('info@email.com'),
] );
Kirki::add_field( RUBI_CUSTOMIZER_ID, [
    'type'        => 'text',
    'settings'    => 'rubi_footer_phnnum',
    'label'       => __( 'description', 'rubi' ),
    'section'     => 'rubi_footer_area',
    'default'     => __('+543-5769800'),
] );
Kirki::add_field( RUBI_CUSTOMIZER_ID, [
    'type'        => 'text',
    'settings'    => 'rubi_footer_location',
    'label'       => __( 'description', 'rubi' ),
    'section'     => 'rubi_footer_area',
    'default'     => __('16/A South London ,USA'),
] );
Kirki::add_field( RUBI_CUSTOMIZER_ID, [
    'type'        => 'text',
    'settings'    => 'rubi_footer_get',
    'label'       => __( 'description', 'rubi' ),
    'section'     => 'rubi_footer_area',
    'default'     => __('get in touch'),
] );
Kirki::add_field( RUBI_CUSTOMIZER_ID, [
    'type'        => 'text',
    'settings'    => 'rubi_footer_follow',
    'label'       => __( 'description', 'rubi' ),
    'section'     => 'rubi_footer_area',
    'default'     => __('follow me'),
] );