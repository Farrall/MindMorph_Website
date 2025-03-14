<?php
/**
 * @author      Elicus <hello@elicus.com>
 * @link        https://www.elicus.com/
 * @copyright   2023 Elicus Technologies Private Limited
 * @version     1.9.15
 */
class DIPL_TeamSlider extends ET_Builder_Module {

	public $slug       = 'dipl_team_slider';
	public $vb_support = 'on';

	protected $module_credits = array(
		'module_uri' => 'https://diviextended.com/product/divi-plus/',
		'author'     => 'Elicus',
		'author_uri' => 'https://elicus.com/',
	);

	/**
	 * Track if the module is currently rendering to prevent unnecessary rendering and recursion.
	 *
	 * @var bool
	 */
	protected static $rendering = false;

	public function init() {
		$this->name             = esc_html__( 'DP Team Slider', 'divi-plus' );
		$this->main_css_element = '%%order_class%%';
	}

	public function get_settings_modal_toggles() {
		return array(
			'general'  => array(
				'toggles' => array(
					'main_content' => array(
						'title' => esc_html__( 'Content', 'divi-plus' ),
					),
					'elements' => array(
						'title'    => esc_html__( 'Elements', 'divi-plus' ),
					),
					'slider_settings' => array(
						'title'    => esc_html__( 'Slider', 'divi-plus' ),
					),
				),
			),
			'advanced' => array(
				'toggles' => array(
					'text'         => array(
						'title'    => esc_html__( 'Text Alignment', 'divi-plus' ),
					),
					'image'         => array(
						'title'    => esc_html__( 'Image', 'divi-plus' ),
					),
					'name_text_settings'         => array(
						'title'    => esc_html__( 'Name Text', 'divi-plus' ),
					),
					'designation_text_settings'     => array(
						'title'    => esc_html__( 'Designation Text', 'divi-plus' ),
					),
					'description_text_settings'  => array(
						'title'    => esc_html__( 'Description Text', 'divi-plus' ),
					),
					'skill_text_settings'      => array(
						'title'    => esc_html__( 'Skill Text', 'divi-plus' ),
					),
					'team_member_image_settings' => array(
						'title'    => esc_html__( 'Team Member Image', 'divi-plus' ),
					),
					'skills_settings'            => array(
						'title'    => esc_html__( 'Skills', 'divi-plus' ),
					),
					'social_icon_settings'       => array(
						'title'    => esc_html__( 'Social Icons', 'divi-plus' ),
					),
					'slider_styles'       => array(
						'title'    => esc_html__( 'Slider', 'divi-plus' ),
					),
				),
			),
		);
	}

	public function get_advanced_fields_config() {
		return array(
			'fonts'                 => array(
				'name'         => array(
					'label'          => esc_html__( 'Name', 'divi-plus' ),
					'font_size'      => array(
						'default'        => '30px',
						'range_settings' => array(
							'min'  => '1',
							'max'  => '100',
							'step' => '1',
						),
						'validate_unit'  => true,
					),
					'line_height'    => array(
						'default'        => '1.5em',
						'range_settings' => array(
							'min'  => '0.1',
							'max'  => '10',
							'step' => '0.1',
						),
					),
					'letter_spacing' => array(
						'default'        => '0px',
						'range_settings' => array(
							'min'  => '0',
							'max'  => '10',
							'step' => '1',
						),
						'validate_unit'  => true,
					),
					'css'            => array(
						'main'      => '%%order_class%% .dipl_team_member_name, %%order_class%% .dipl_team_member_name h1, %%order_class%% .dipl_team_member_name h2, %%order_class%% .dipl_team_member_name h3, %%order_class%% .dipl_team_member_name h4, %%order_class%% .dipl_team_member_name h5, %%order_class%% .dipl_team_member_name h6',
						'important' => 'all',
					),
					'header_level'   => array(
						'default' => 'h2',
					),
					'tab_slug'       => 'advanced',
					'toggle_slug'    => 'name_text_settings',
				),
				'designation' => array(
					'label'          => esc_html__( 'Designation', 'divi-plus' ),
					'font_size'      => array(
						'default'        => '20px',
						'range_settings' => array(
							'min'  => '1',
							'max'  => '100',
							'step' => '1',
						),
						'validate_unit'  => true,
					),
					'line_height'    => array(
						'default'        => '1.5em',
						'range_settings' => array(
							'min'  => '0.1',
							'max'  => '10',
							'step' => '0.1',
						),
					),
					'letter_spacing' => array(
						'default'        => '0px',
						'range_settings' => array(
							'min'  => '0',
							'max'  => '10',
							'step' => '1',
						),
						'validate_unit'  => true,
					),
					'css'            => array(
						'main'      => '%%order_class%% .dipl_team_member_designation, %%order_class%% .dipl_team_member_designation h1, %%order_class%% .dipl_team_member_designation h2, %%order_class%% .dipl_team_member_designation h3, %%order_class%% .dipl_team_member_designation h4, %%order_class%% .dipl_team_member_designation h5, %%order_class%% .dipl_team_member_designation h6',
						'important' => 'all',
					),
					'header_level'   => array(
						'default' => 'h4',
					),
					'tab_slug'       => 'advanced',
					'toggle_slug'    => 'designation_text_settings',
				),
				'body'         => array(
					'label'          => esc_html__( 'Description', 'divi-plus' ),
					'font_size'      => array(
						'default'        => '16px',
						'range_settings' => array(
							'min'  => '1',
							'max'  => '100',
							'step' => '1',
						),
						'validate_unit'  => true,
					),
					'line_height'    => array(
						'default'        => '1.3em',
						'range_settings' => array(
							'min'  => '0',
							'max'  => '5',
							'step' => '0.1',
						),
					),
					'letter_spacing' => array(
						'default'        => '0px',
						'range_settings' => array(
							'min'  => '0',
							'max'  => '10',
							'step' => '1',
						),
						'validate_unit'  => true,
					),
					'css'            => array(
						'main'      => '%%order_class%% .dipl_team_member_short_desc, %%order_class%% .dipl_team_member_short_desc a',
						'important' => 'all',
					),
					'tab_slug'       => 'advanced',
					'toggle_slug'    => 'description_text_settings',
				),
				'skill_text' => array(
					'label'          => esc_html__( 'Skill Field', 'divi-plus' ),
					'font_size'      => array(
						'default'        => '20px',
						'range_settings' => array(
							'min'  => '1',
							'max'  => '100',
							'step' => '1',
						),
						'validate_unit'  => true,
					),
					'line_height'    => array(
						'default'        => '1.5em',
						'range_settings' => array(
							'min'  => '0.1',
							'max'  => '10',
							'step' => '0.1',
						),
					),
					'letter_spacing' => array(
						'default'        => '0px',
						'range_settings' => array(
							'min'  => '0',
							'max'  => '10',
							'step' => '1',
						),
						'validate_unit'  => true,
					),
					'css'            => array(
						'main'      => '%%order_class%% .dipl_skill_bar_wrapper_inner .dipl_skill_name, %%order_class%% .dipl_skill_bar_wrapper_inner .dipl_skill_name a',
						'important' => 'all',
					),
					'tab_slug'       => 'advanced',
					'toggle_slug'    => 'skill_text_settings',
				),
			),
			'slider_margin_padding' => array(
				'slider_container' => array(
					'margin_padding' => array(
						'css' => array(
							'use_margin' => false,
							'padding'   => "{$this->main_css_element} .swiper-container",
							'important' => 'all',
						),
					),
				),
				'team_member_card' => array(
					'margin_padding' => array(
						'css' => array(
							'use_margin' => false,
							'padding' => '%%order_class%% .dipl_team_member_card',
							'important' => 'all',
						),
					),
				),
				'arrows' => array(
					'margin_padding' => array(
						'css' => array(
							'use_margin' => false,
							'padding'    => "{$this->main_css_element} .swiper-button-next::after, {$this->main_css_element} .swiper-button-prev::after",
							'important'  => 'all',
						),
					),
				),
			),
			'borders' => array(
				'team_member_border' => array(
					'css'          => array(
						'main' => array(
							'border_radii'  => '%%order_class%% .swiper-slide',
							'border_styles' => '%%order_class%% .swiper-slide',
							'important'     => 'all',
						),
					),
					'label_prefix' => esc_html__( 'Member', 'divi-plus' ),
					'tab_slug'     => 'advanced',
					'toggle_slug'  => 'border',
				),
				'team_member_image_border' => array(
					'css'          => array(
						'main' => array(
							'border_radii'  => '%%order_class%% .dipl_swiper_wrapper .dipl_team_member_image img',
							'border_styles' => '%%order_class%% .dipl_swiper_wrapper .dipl_team_member_image img',
						),
						'important'     => 'all',
					),
					'label_prefix' => esc_html__( 'Member Image', 'divi-plus' ),
					'tab_slug'     => 'advanced',
					'toggle_slug'  => 'image',
				),
				'team_member_icon_border'  => array(
					'css'          => array(
						'main' => array(
							'border_radii'  => '%%order_class%% .dipl_team_member_social_icon',
							'border_styles' => '%%order_class%% .dipl_team_member_social_icon',
							'important'     => 'all',
						),
					),
					'label_prefix' => esc_html__( 'Icon', 'divi-plus' ),
					'tab_slug'     => 'advanced',
					'toggle_slug'  => 'border',
				),
				'default'                  => array(
					'css' => array(
						'main' => array(
							'border_radii'  => '%%order_class%%',
							'border_styles' => '%%order_class%%',
						),
					),
				),
			),
			'box_shadow' => array(
				'single_post' => array(
					'label'       => esc_html__( 'Team Member', 'divi-plus' ),
					'css'         => array(
						'main' => "{$this->main_css_element} .swiper-slide",
						'important' => 'all',
					),
					'tab_slug'    => 'advanced',
					'toggle_slug' => 'box_shadow',
				),
				'team_member_image_shadow' => array(
					'css'          => array(
						'main' => '%%order_class%% .dipl_swiper_wrapper .dipl_team_member_image img',
						'important' => 'all',
					),
					'label'       => esc_html__( 'Member Image Box Shadow', 'divi-plus' ),
					'tab_slug'     => 'advanced',
					'toggle_slug'  => 'image',
				),
				'default'                  => array(
					'css' => array(
						'main' => '%%order_class%%',
					),
				),
			),
			'text' => array(
				'text_orientation' => array(
					'exclude_options' => array( 'justified' ),
				),
				'options' => array(
					'text_orientation' => array(
						'label' => esc_html__( 'Alignment', 'divi-plus' ),
					),
				),
				'css' => array(
					'text_orientation' => $this->main_css_element,
				),
			),
			'text_shadow'    => false,
		);
	}

	public function get_fields() {
		$team_slider_fields = array(
			'posts_number' => array(
				'label'            => esc_html__( 'Number of Members', 'divi-plus' ),
				'type'             => 'text',
				'option_category'  => 'configuration',
				'default'          => '10',
				'tab_slug'         => 'general',
				'toggle_slug'      => 'main_content',
				'description'      => esc_html__( 'Here you can define the value of number of members you would like to display.', 'divi-plus' ),
				'computed_affects' => array(
					'__team_slider_data',
				),
			),
			'post_order' => array(
				'label'            => esc_html__( 'Order', 'divi-plus' ),
				'type'             => 'select',
				'option_category'  => 'configuration',
				'options'          => array(
					'DESC' => esc_html__( 'DESC', 'divi-plus' ),
					'ASC'  => esc_html__( 'ASC', 'divi-plus' ),
				),
				'default'          => 'DESC',
				'tab_slug'         => 'general',
				'toggle_slug'      => 'main_content',
				'description'      => esc_html__( 'Here you can choose in which order you want to display team members on the slider.', 'divi-plus' ),
				'computed_affects' => array(
					'__team_slider_data',
				),
			),
			'post_order_by' => array(
				'label'            => esc_html__( 'Order by', 'divi-plus' ),
				'type'             => 'select',
				'option_category'  => 'configuration',
				'options'          => array(
					'date'      => esc_html__( 'Date', 'divi-plus' ),
					'modified'  => esc_html__( 'Modified Date', 'divi-plus' ),
					'title'     => esc_html__( 'Title', 'divi-plus' ),
					'name'      => esc_html__( 'Slug', 'divi-plus' ),
					'ID'        => esc_html__( 'ID', 'divi-plus' ),
					'rand'      => esc_html__( 'Random', 'divi-plus' ),
					'relevance' => esc_html__( 'Relevance', 'divi-plus' ),
					'none'      => esc_html__( 'None', 'divi-plus' ),
				),
				'default'          => 'date',
				'tab_slug'         => 'general',
				'toggle_slug'      => 'main_content',
				'description'      => esc_html__( 'Here you can choose the order type of the members to be displayed on the slider.', 'divi-plus' ),
				'computed_affects' => array(
					'__team_slider_data',
				),
			),
			'include_categories' => array(
				'label'            => esc_html__( 'Select Categories', 'divi-plus' ),
				'type'             => 'categories',
				'option_category'  => 'basic_option',
				'renderer_options' => array(
					'use_terms'  => true,
					'term_name'  => 'dipl-team-member-category',
					'field_name' => 'el_include_team_member_category',
				),
				'tab_slug'         => 'general',
				'toggle_slug'      => 'main_content',
				'description'      => esc_html__( 'Here you can choose which category members you would like to display. If you want to display all members, then leave it unchecked.', 'divi-plus' ),
				'computed_affects' => array(
					'__team_slider_data',
				),
			),
			'no_result_text' => array(
				'label'            => esc_html__( 'No Result Text', 'divi-plus' ),
				'type'             => 'text',
				'option_category'  => 'configuration',
				'default'		   => esc_html__( 'The team member you requested could not be found. Try changing your module settings or create some new team members.', 'divi-plus' ),
				'tab_slug'         => 'general',
				'toggle_slug'      => 'main_content',
				'description'      => esc_html__( 'Here you can define custom no result text.', 'divi-plus' ),
			),
			'show_short_desc' => array(
				'label'            => esc_html__( 'Show Short Description', 'divi-plus' ),
				'type'             => 'yes_no_button',
				'option_category'  => 'configuration',
				'options'          => array(
					'on'  => esc_html__( 'Yes', 'divi-plus' ),
					'off' => esc_html__( 'No', 'divi-plus' ),
				),
				'default'          => 'on',
				'tab_slug'         => 'general',
				'toggle_slug'      => 'elements',
				'description'      => esc_html__( 'Here you can select whether or not to display the short description of the members.', 'divi-plus' ),
				'computed_affects' => array(
					'__team_slider_data',
				),
			),
			'show_designation' => array(
				'label'            => esc_html__( 'Show Designation', 'divi-plus' ),
				'type'             => 'yes_no_button',
				'option_category'  => 'configuration',
				'options'          => array(
					'on'  => esc_html__( 'Yes', 'divi-plus' ),
					'off' => esc_html__( 'No', 'divi-plus' ),
				),
				'default'          => 'on',
				'tab_slug'         => 'general',
				'toggle_slug'      => 'elements',
				'description'      => esc_html__( 'Here you can select whether or not to display the designation of the members.', 'divi-plus' ),
				'computed_affects' => array(
					'__team_slider_data',
				),
			),
			'show_social_icon' => array(
				'label'            => esc_html__( 'Show Social Icon', 'divi-plus' ),
				'type'             => 'yes_no_button',
				'option_category'  => 'configuration',
				'options'          => array(
					'on'  => esc_html__( 'Yes', 'divi-plus' ),
					'off' => esc_html__( 'No', 'divi-plus' ),
				),
				'default'          => 'on',
				'tab_slug'         => 'general',
				'toggle_slug'      => 'elements',
				'description'      => esc_html__( 'Here you can select whether or not to display social icons on the slider.', 'divi-plus' ),
				'computed_affects' => array(
					'__team_slider_data',
				),
			),
			'social_icon_link_target' => array(
                'label'             => esc_html__( 'Social Icon Link Target', 'divi-plus' ),
                'type'              => 'select',
                'option_category'   => 'configuration',
                'options'           => array(
                    'off' => esc_html__( 'In The Same Window', 'divi-plus' ),
                    'on'  => esc_html__( 'In The New Tab', 'divi-plus' ),
                ),
                'default'           => 'off',
				'show_if'         => array(
					'show_social_icon' => 'on',
				),
                'tab_slug'          => 'general',
                'toggle_slug'       => 'elements',
                'description'       => esc_html__( 'Here you can choose whether or not the social icon opens the link in a new window.', 'divi-plus' ),
                'computed_affects'  => array(
					'__team_slider_data',
				),
            ),
			'show_skills' => array(
				'label'            => esc_html__( 'Show Skills', 'divi-plus' ),
				'type'             => 'yes_no_button',
				'option_category'  => 'configuration',
				'options'          => array(
					'on'  => esc_html__( 'Yes', 'divi-plus' ),
					'off' => esc_html__( 'No', 'divi-plus' ),
				),
				'default'          => 'on',
				'tab_slug'         => 'general',
				'toggle_slug'      => 'elements',
				'description'      => esc_html__( 'Here you can select whether or not to display skills of the members.', 'divi-plus' ),
				'computed_affects' => array(
					'__team_slider_data',
				),
			),
			'enable_member_link' => array(
				'label'            => esc_html__( 'Enable Member Link', 'divi-plus' ),
				'type'             => 'yes_no_button',
				'option_category'  => 'configuration',
				'options'          => array(
					'on'  => esc_html__( 'Yes', 'divi-plus' ),
					'off' => esc_html__( 'No', 'divi-plus' ),
				),
				'default'          => 'off',
				'tab_slug'         => 'general',
				'toggle_slug'      => 'link_options',
				'description'      => esc_html__( 'Here you can select whether or not to link the member on single member page.', 'divi-plus' ),
				'computed_affects' => array(
					'__team_slider_data',
				),
			),
			'link_target' => array(
                'label'             => esc_html__( 'Member Link Target', 'divi-plus' ),
                'type'              => 'select',
                'option_category'   => 'configuration',
                'options'           => array(
                    'off' => esc_html__( 'In The Same Window', 'divi-plus' ),
                    'on'  => esc_html__( 'In The New Tab', 'divi-plus' ),
                ),
                'default'           => 'off',
                'show_if'			=> array(
                	'enable_member_link' => 'on',
                ),
                'tab_slug'          => 'general',
                'toggle_slug'       => 'link_options',
                'description'       => esc_html__( 'Here you can choose whether or not the member opens the link in a new window.', 'divi-plus' ),
                'computed_affects'  => array(
					'__team_slider_data',
				),
            ),
			'slider_layout' => array(
				'label'            => esc_html__( 'Layout', 'divi-plus' ),
				'type'             => 'select',
				'option_category'  => 'layout',
				'options'          => array(
					'layout1' => esc_html__( 'Layout 1', 'divi-plus' ),
					'layout2' => esc_html__( 'Layout 2', 'divi-plus' ),
				),
				'default'          => 'layout1',
				'tab_slug'         => 'general',
				'toggle_slug'      => 'slider_settings',
				'description'      => esc_html__( 'Here you can select the team slider layout.', 'divi-plus' ),
				'computed_affects' => array(
					'__team_slider_data',
				),
			),
			'slide_effect' => array(
				'label'           => esc_html__( 'Slide Effect', 'divi-plus' ),
				'type'            => 'select',
				'option_category' => 'layout',
				'options'         => array(
					'slide'     => esc_html__( 'Slide', 'divi-plus' ),
					'coverflow' => esc_html__( 'Coverflow', 'divi-plus' ),
					'cube'      => esc_html__( 'Cube', 'divi-plus' ),
					'flip'      => esc_html__( 'Flip', 'divi-plus' ),
					'fade'      => esc_html__( 'Fade', 'divi-plus' ),
				),
				'default'         => 'slide',
				'tab_slug'        => 'general',
				'toggle_slug'     => 'slider_settings',
				'description'     => esc_html__( 'Here you can choose the slide animation effect.', 'divi-plus' ),
			),
			'post_per_slide' => array(
				'label'            => esc_html__( 'Number of Members Per View', 'divi-plus' ),
				'type'             => 'select',
				'option_category'  => 'layout',
				'options'          => array(
					'1' => esc_html__( '1', 'divi-plus' ),
					'2' => esc_html__( '2', 'divi-plus' ),
					'3' => esc_html__( '3', 'divi-plus' ),
					'4' => esc_html__( '4', 'divi-plus' ),
					'5' => esc_html__( '5', 'divi-plus' ),
					'6'  => esc_html__( '6', 'divi-plus' ),
					'7'  => esc_html__( '7', 'divi-plus' ),
					'8'  => esc_html__( '8', 'divi-plus' ),
					'9'  => esc_html__( '9', 'divi-plus' ),
					'10' => esc_html__( '10', 'divi-plus' ),
				),
				'default'          => '3',
				'mobile_options'   => true,
				'show_if'          => array(
					'slide_effect' => array( 'coverflow', 'slide' ),
				),
				'tab_slug'         => 'general',
				'toggle_slug'      => 'slider_settings',
				'description'      => esc_html__( 'Here you can choose the number of members you want to display per slide.', 'divi-plus' ),
				'computed_affects' => array(
					'__team_slider_data',
				),
			),
			'slides_per_group' => array(
				'label'           => esc_html__( 'Number of Slides Per Group', 'divi-plus' ),
				'type'            => 'select',
				'option_category' => 'layout',
				'options'         => array(
					'1'  => esc_html__( '1', 'divi-plus' ),
					'2'  => esc_html__( '2', 'divi-plus' ),
					'3'  => esc_html__( '3', 'divi-plus' ),
					'4' => esc_html__( '4', 'divi-plus' ),
					'5' => esc_html__( '5', 'divi-plus' ),
					'6' => esc_html__( '6', 'divi-plus' ),
					'7' => esc_html__( '7', 'divi-plus' ),
					'8' => esc_html__( '8', 'divi-plus' ),
					'9' => esc_html__( '9', 'divi-plus' ),
					'10' => esc_html__( '10', 'divi-plus' ),
				),
				'default'         => '1',
				'mobile_options'  => true,
				'show_if'         => array(
					'slide_effect' => array( 'coverflow', 'slide' ),
				),
				'tab_slug'        => 'general',
				'toggle_slug'     => 'slider_settings',
				'description'     => esc_html__( 'Here you can choose the number of slides per group to slide by.', 'divi-plus' ),
			),
			'space_between_slides' => array(
				'label'           => esc_html__( 'Space between Slides', 'divi-plus' ),
				'type'            => 'range',
				'option_category' => 'layout',
				'range_settings'  => array(
					'min'  => '10',
					'max'  => '100',
					'step' => '1',
				),
				'show_if'         => array(
					'slide_effect' => array( 'slide', 'coverflow' ),
				),
				'fixed_unit'	  => 'px',
				'default'         => '20px',
				'mobile_options'  => true,
				'tab_slug'        => 'general',
				'toggle_slug'     => 'slider_settings',
				'description'     => esc_html__( 'Move the slider or input the value to increse or decrease the space between slides.', 'divi-plus' ),
			),
			'enable_coverflow_shadow' => array(
				'label'           => esc_html__( 'Enable Slide Shadow', 'divi-plus' ),
				'type'            => 'yes_no_button',
				'option_category' => 'configuration',
				'options'         => array(
					'on'  => esc_html__( 'Yes', 'divi-plus' ),
					'off' => esc_html__( 'No', 'divi-plus' ),
				),
				'default'         => 'off',
				'show_if'         => array(
					'slide_effect' => 'coverflow',
				),
				'tab_slug'        => 'general',
				'toggle_slug'     => 'slider_settings',
				'description'     => esc_html__( 'Here you can select whether or not to use Slide Shadow for the Coverflow effect.', 'divi-plus' ),
			),
			'coverflow_shadow_color' => array(
				'label'        => esc_html__( 'Shadow Color', 'divi-plus' ),
				'type'         => 'color-alpha',
				'custom_color' => true,
				'show_if'      => array(
					'slide_effect'            => 'coverflow',
					'enable_coverflow_shadow' => 'on',
				),
				'default'      => '#ccc',
				'tab_slug'     => 'general',
				'toggle_slug'  => 'slider_settings',
				'description'  => esc_html__( 'Here you can select color for the Shadow.' ),
			),
			'coverflow_rotate' => array(
				'label'           => esc_html__( 'Coverflow Rotate', 'divi-plus' ),
				'type'            => 'range',
				'option_category' => 'font_option',
				'range_settings'  => array(
					'min'  => '1',
					'max'  => '360',
					'step' => '1',
				),
				'mobile_options'  => true,
				'show_if'         => array(
					'slide_effect' => 'coverflow',
				),
				'default'         => '40',
				'tab_slug'        => 'general',
				'toggle_slug'     => 'slider_settings',
				'description'     => esc_html__( 'Move the slider or input the value to rotate non-focused team members card.', 'divi-plus' ),
			),
			'coverflow_depth' => array(
				'label'           => esc_html__( 'Coverflow Depth', 'divi-plus' ),
				'type'            => 'range',
				'option_category' => 'font_option',
				'range_settings'  => array(
					'min'  => '1',
					'max'  => '1000',
					'step' => '1',
				),
				'mobile_options'  => true,
				'show_if'         => array(
					'slide_effect' => 'coverflow',
				),
				'default'         => '100',
				'tab_slug'        => 'general',
				'toggle_slug'     => 'slider_settings',
				'description'     => esc_html__( 'Move the slider or input the value to zoom-in or zoom-out, non-focused team members card on the slider.', 'divi-plus' ),
			),
			'equalize_posts_height' => array(
				'label'           => esc_html__( 'Equalize Slide Height', 'divi-plus' ),
				'type'            => 'yes_no_button',
				'option_category' => 'configuration',
				'options'         => array(
					'off' => esc_html__( 'Off', 'divi-plus' ),
					'on'  => esc_html__( 'On', 'divi-plus' ),
				),
				'default'         => 'on',
				'tab_slug'        => 'general',
				'toggle_slug'     => 'slider_settings',
				'description'     => esc_html__( 'Here you can choose whether or not to equalize the card height of the team members on the slider.', 'divi-plus' ),
			),
			'auto_height_slider' => array(
				'label'           => esc_html__( 'Auto Height Slider', 'divi-plus' ),
				'type'            => 'yes_no_button',
				'option_category' => 'configuration',
				'options'         => array(
					'off' => esc_html__( 'Off', 'divi-plus' ),
					'on'  => esc_html__( 'On', 'divi-plus' ),
				),
				'default'         => 'off',
				'tab_slug'        => 'general',
				'toggle_slug'     => 'slider_settings',
				'description'     => esc_html__( 'Here you can choose whether or not slider height should adjust according to each slide.', 'divi-plus' ),
			),
			'slider_loop' => array(
				'label'           => esc_html__( 'Enable Loop', 'divi-plus' ),
				'type'            => 'yes_no_button',
				'option_category' => 'configuration',
				'options'         => array(
					'on'  => esc_html__( 'Yes', 'divi-plus' ),
					'off' => esc_html__( 'No', 'divi-plus' ),
				),
				'default'         => 'off',
				'tab_slug'        => 'general',
				'toggle_slug'     => 'slider_settings',
				'description'     => esc_html__( 'Here you can choose whether or not to enable loop for the team slider.', 'divi-plus' ),
			),
			'autoplay' => array(
				'label'           => esc_html__( 'Autoplay', 'divi-plus' ),
				'type'            => 'yes_no_button',
				'option_category' => 'configuration',
				'options'         => array(
					'on'  => esc_html__( 'Yes', 'divi-plus' ),
					'off' => esc_html__( 'No', 'divi-plus' ),
				),
				'default'         => 'on',
				'tab_slug'        => 'general',
				'toggle_slug'     => 'slider_settings',
				'description'     => esc_html__( 'Here you can choose whether or not to autoplay team slider.', 'divi-plus' ),
			),
			'enable_linear_transition'                        => array(
				'label'           => esc_html__( 'Enable Linear Transition', 'divi-plus' ),
				'type'            => 'yes_no_button',
				'option_category' => 'configuration',
				'options'         => array(
					'on'  => esc_html__( 'Yes', 'divi-plus' ),
					'off' => esc_html__( 'No', 'divi-plus' ),
				),
				'default'         => 'off',
				'tab_slug'        => 'general',
				'toggle_slug'     => 'slider_settings',
				'description'     => esc_html__( 'Here you can choose whether or not to enable linear transition between slides.', 'divi-plus' ),
			),
			'autoplay_speed' => array(
				'label'           => esc_html__( 'Autoplay Delay', 'divi-plus' ),
				'type'            => 'text',
				'option_category' => 'configuration',
				'default'         => '3000',
				'show_if'         => array(
					'autoplay' => 'on',
				),
				'show_if_not'     => array(
					'autoplay' => 'off',
				),
				'tab_slug'        => 'general',
				'toggle_slug'     => 'slider_settings',
				'description'     => esc_html__( 'Here you can input the value to delay autoplay after a complete transition of the team slider.', 'divi-plus' ),
			),
			'transition_duration' => array(
				'label'           => esc_html__( 'Transition Duration', 'divi-plus' ),
				'type'            => 'text',
				'option_category' => 'configuration',
				'default'         => '1000',
				'tab_slug'        => 'general',
				'toggle_slug'     => 'slider_settings',
				'description'     => esc_html__( 'Here you can input the value to delay each slide in a transition.', 'divi-plus' ),
			),
			'pause_on_hover' => array(
				'label'           => esc_html__( 'Pause On Hover', 'divi-plus' ),
				'type'            => 'yes_no_button',
				'option_category' => 'configuration',
				'options'         => array(
					'on'  => esc_html__( 'Yes', 'divi-plus' ),
					'off' => esc_html__( 'No', 'divi-plus' ),
				),
				'default'         => 'on',
				'show_if'         => array(
					'autoplay' => 'on',
				),
				'show_if_not'     => array(
					'autoplay' => 'off',
				),
				'tab_slug'        => 'general',
				'toggle_slug'     => 'slider_settings',
				'description'     => esc_html__( 'Here you can choose whether or not to pause slides on mouse hover.', 'divi-plus' ),
			),
			'show_arrow' => array(
				'label'           => esc_html__( 'Show Arrows', 'divi-plus' ),
				'type'            => 'yes_no_button',
				'option_category' => 'configuration',
				'options'         => array(
					'on'  => esc_html__( 'Yes', 'divi-plus' ),
					'off' => esc_html__( 'No', 'divi-plus' ),
				),
				'default'         => 'on',
				'tab_slug'        => 'general',
				'toggle_slug'     => 'slider_settings',
				'description'     => esc_html__( 'Here you can choose whether or not to display previous & next arrow on the slider.', 'divi-plus' ),
			),
			'previous_slide_arrow' => array(
				'label'           => esc_html__( 'Previous Arrow', 'divi-plus' ),
				'type'            => 'select_icon',
				'option_category' => 'basic_option',
				'class'           => array(
					'et-pb-font-icon',
				),
				'show_if'         => array(
					'show_arrow' => 'on',
				),
				'default'         => ET_BUILDER_PRODUCT_VERSION < '4.13.0' ? '%%2%%' : '&#x23;||divi||400',
				'tab_slug'        => 'general',
				'toggle_slug'     => 'slider_settings',
				'description'     => esc_html__( 'Here you can select the icon to be used for the previous slide navigation.', 'divi-plus' ),
			),
			'next_slide_arrow' => array(
				'label'           => esc_html__( 'Next Arrow', 'divi-plus' ),
				'type'            => 'select_icon',
				'option_category' => 'basic_option',
				'class'           => array(
					'et-pb-font-icon',
				),
				'show_if'         => array(
					'show_arrow' => 'on',
				),
				'default'         => ET_BUILDER_PRODUCT_VERSION < '4.13.0' ? '%%3%%' : '&#x24;||divi||400',
				'tab_slug'        => 'general',
				'toggle_slug'     => 'slider_settings',
				'description'     => esc_html__( 'Here you can select the icon to be used for the next slide navigation.', 'divi-plus' ),
			),
			'show_arrow_on_hover' => array(
				'label'           => esc_html__( 'Show Arrows Only On Hover', 'divi-plus' ),
				'type'            => 'yes_no_button',
				'option_category' => 'configuration',
				'options'         => array(
					'on'  => esc_html__( 'Yes', 'divi-plus' ),
					'off' => esc_html__( 'No', 'divi-plus' ),
				),
				'show_if'         => array(
					'show_arrow' => 'on',
				),
				'default'         => 'off',
				'tab_slug'        => 'general',
				'toggle_slug'     => 'slider_settings',
				'description'     => esc_html__( 'Here you can choose whether or not to display previous and next arrow on hover.', 'divi-plus' ),
			),
			'arrows_position' => array(
				'label'           => esc_html__( 'Arrows Position', 'divi-plus' ),
				'type'            => 'select',
				'option_category' => 'layout',
				'options'         => array(
					'inside' 		=> esc_html__( 'Inside', 'divi-plus' ),
					'outside'		=> esc_html__( 'Outside', 'divi-plus' ),
					'top_left'      => esc_html__( 'Top Left', 'divi-plus' ),
					'top_right'     => esc_html__( 'Top Right', 'divi-plus' ),
					'top_center'    => esc_html__( 'Top Center', 'divi-plus' ),
					'bottom_left'   => esc_html__( 'Bottom Left', 'divi-plus' ),
					'bottom_right'  => esc_html__( 'Bottom Right', 'divi-plus' ),
					'bottom_center' => esc_html__( 'Bottom Center', 'divi-plus' ),
				),
				'default'         => 'outside',
				'mobile_options'  => true,
				'show_if'         => array(
					'show_arrow' => 'on',
				),
				'tab_slug'        => 'general',
				'toggle_slug'     => 'slider_settings',
				'description'     => esc_html__( 'Here you can choose the arrows position.', 'divi-plus' ),
			),
			'show_control_dot' => array(
				'label'           => esc_html__( 'Show Control Dots', 'divi-plus' ),
				'type'            => 'yes_no_button',
				'option_category' => 'configuration',
				'options'         => array(
					'on'  => esc_html__( 'Yes', 'divi-plus' ),
					'off' => esc_html__( 'No', 'divi-plus' ),
				),
				'default'         => 'on',
				'tab_slug'        => 'general',
				'toggle_slug'     => 'slider_settings',
				'description'     => esc_html__( 'Here you choose whether or not to display pagination on the team slider.', 'divi-plus' ),
			),
			'control_dot_style' => array(
				'label'            => esc_html__( 'Dots Pagination Style', 'divi-plus' ),
				'type'             => 'select',
				'option_category'  => 'layout',
				'options'          => array(
					'solid_dot'       => esc_html__( 'Solid Dot', 'divi-plus' ),
					'transparent_dot' => esc_html__( 'Transparent Dot', 'divi-plus' ),
					'stretched_dot'   => esc_html__( 'Stretched Dot', 'divi-plus' ),
					'line'            => esc_html__( 'Line', 'divi-plus' ),
					'rounded_line'    => esc_html__( 'Rounded Line', 'divi-plus' ),
					'square_dot'      => esc_html__( 'Squared Dot', 'divi-plus' ),
				),
				'show_if'          => array(
					'show_control_dot' => 'on',
				),
				'default'          => 'solid_dot',
				'tab_slug'         => 'general',
				'toggle_slug'      => 'slider_settings',
				'description'      => esc_html__( 'control dot style', 'divi-plus' ),
			),
			'enable_dynamic_dots' => array(
				'label'            => esc_html__( 'Enable Dynamic Dots', 'divi-plus' ),
				'type'             => 'yes_no_button',
				'option_category'  => 'configuration',
				'options'          => array(
					'on'  => esc_html__( 'Yes', 'divi-plus' ),
					'off' => esc_html__( 'No', 'divi-plus' ),
				),
				'default'          => 'off',
				'show_if'          => array(
					'show_control_dot' => 'on',
					'control_dot_style' => array(
						'solid_dot',
						'transparent_dot',
						'square_dot'
					),
				),
				'tab_slug'         => 'general',
				'toggle_slug'      => 'slider_settings',
				'description'      => esc_html__( 'This setting will turn on and off the dynamic pagination of the slider.', 'divi-plus' ),
			),
			'slider_container_custom_padding' => array(
				'label'            => esc_html__( 'Slider Container Padding', 'divi-plus' ),
				'type'             => 'custom_padding',
				'option_category'  => 'layout',
				'mobile_options'   => true,
				'hover'            => false,
				'tab_slug'         => 'advanced',
				'toggle_slug'      => 'margin_padding',
				'description'      => esc_html__( 'Padding adds extra space to the inside of the element, increasing the distance between the edge of the element and its inner contents.', 'divi-plus' ),
			),
			'team_member_card_custom_padding' => array(
				'label'            => esc_html__( 'Slide Padding', 'divi-plus' ),
				'type'             => 'custom_padding',
				'option_category'  => 'layout',
				'mobile_options'   => true,
				'hover'            => false,
				'default'          => '',
				'default_on_front' => '',
				'tab_slug'         => 'advanced',
				'toggle_slug'      => 'margin_padding',
				'description'      => esc_html__( 'Padding adds extra space to the inside of the element, increasing the distance between the edge of the element and its inner contents.', 'divi-plus' ),
			),
			'slide_bg_color' => array(
				'label'             => esc_html__( 'Slide Background', 'divi-plus' ),
				'type'              => 'background-field',
				'base_name'         => 'slide_bg',
				'context'           => 'slide_bg_color',
				'custom_color'      => true,
				'background_fields' => $this->generate_background_options( 'slide_bg', 'button', 'general', 'background', 'slide_bg_color' ),
				'mobile_options'    => true,
				'tab_slug'          => 'general',
				'toggle_slug'       => 'background',
				'description'       => esc_html__( 'Customize the background style of the individual slide by adjusting the background color, gradient, and image.', 'divi-plus' ),
			),
			'social_icon_separator_color' => array(
				'label'        => esc_html__( 'Icon Separator Color', 'divi-plus' ),
				'type'         => 'color-alpha',
				'custom_color' => true,
				'show_if'      => array(
					'slider_layout' => 'layout1',
				),
				'default'      => '#cccccc',
				'tab_slug'     => 'advanced',
				'toggle_slug'  => 'social_icon_settings',
				'description'  => esc_html__( 'Here you can define the social icon separator color.', 'divi-plus' ),
			),
			'social_icon_separator_size' => array(
				'label'           => esc_html__( 'Separator Size', 'divi-plus' ),
				'type'            => 'range',
				'option_category' => 'font_option',
				'range_settings'  => array(
					'min'  => '1',
					'max'  => '10',
					'step' => '1',
				),
				'mobile_options'  => true,
				'show_if'         => array(
					'slider_layout' => 'layout1',
				),
				'default'         => '1px',
				'tab_slug'        => 'advanced',
				'toggle_slug'     => 'social_icon_settings',
				'description'     => esc_html__( 'Move the slider or input the value to increase or decrease social icon separator size.', 'divi-plus' ),
			),
			'social_icon_size' => array(
				'label'           	=> esc_html__( 'Icon Size', 'divi-plus' ),
				'type'            	=> 'range',
				'option_category' 	=> 'font_option',
				'range_settings'  	=> array(
					'min'  => '1',
					'max'  => '100',
					'step' => '1',
				),
				'mobile_options'  	=> true,
				'default'         	=> '16px',
				'default_on_front'	=> '16px',
				'tab_slug'        	=> 'advanced',
				'toggle_slug'     	=> 'social_icon_settings',
				'description'     	=> esc_html__( 'Move the slider or input the value to increase or decrease team member social icon size.', 'divi-plus' ),
			),
			'social_icon_color' => array(
				'label'        => esc_html__( 'Icon Color', 'divi-plus' ),
				'type'         => 'color-alpha',
				'custom_color' => true,
				'hover'        => 'tabs',
				'tab_slug'     => 'advanced',
				'toggle_slug'  => 'social_icon_settings',
				'description'  => esc_html__( 'Here you can choose a custom color to be used for the social icon.', 'divi-plus' ),
			),
			'social_icon_background_color' => array(
				'label'        => esc_html__( 'Icon Background Color', 'divi-plus' ),
				'type'         => 'color-alpha',
				'custom_color' => true,
				'hover'        => 'tabs',
				'tab_slug'     => 'advanced',
				'toggle_slug'  => 'social_icon_settings',
				'description'  => esc_html__( 'Here you can choose a custom color to be used for the social icon background.', 'divi-plus' ),
			),
			'social_icon_alignment' => array(
				'label'           => esc_html__( 'Social Icon Alignment', 'divi-plus' ),
				'type'            => 'select',
				'option_category' => 'layout',
				'options'         => array(
					'dipl_icon_left'   => esc_html__( 'Left', 'divi-plus' ),
					'dipl_icon_center' => esc_html__( 'Center', 'divi-plus' ),
					'dipl_icon_right'  => esc_html__( 'Right', 'divi-plus' ),
				),
				'default'         => 'dipl_icon_center',
				'tab_slug'        => 'advanced',
				'toggle_slug'     => 'social_icon_settings',
				'description'     => esc_html__( 'Here you can select the placement for the social icons.', 'divi-plus' ),
			),
			'skill_bar_height' => array(
				'label'           => esc_html__( 'Bar Height', 'divi-plus' ),
				'type'            => 'range',
				'option_category' => 'font_option',
				'range_settings'  => array(
					'min'  => '1',
					'max'  => '30',
					'step' => '1',
				),
				'show_if'         => array(
					'show_skills' => 'on',
				),
				'mobile_options'  => true,
				'default'         => '12px',
				'tab_slug'        => 'advanced',
				'toggle_slug'     => 'skills_settings',
				'description'     => esc_html__( 'Move the slider or input the value to increase or decrease skills bar height.', 'divi-plus' ),
			),
			'empty_bar_color' => array(
				'label'        => esc_html__( 'Empty Bar Color', 'divi-plus' ),
				'type'         => 'color-alpha',
				'custom_color' => true,
				'show_if'      => array(
					'show_skills' => 'on',
				),
				'hover'        => 'tabs',
				'default'      => '#ccc',
				'tab_slug'     => 'advanced',
				'toggle_slug'  => 'skills_settings',
				'description'  => esc_html__( 'Here you can choose a custom color to be used for the empty skills bar.', 'divi-plus' ),
			),
			'filled_bar_color' => array(
				'label'        => esc_html__( 'Filled Bar Color', 'divi-plus' ),
				'type'         => 'color-alpha',
				'custom_color' => true,
				'show_if'      => array(
					'show_skills' => 'on',
				),
				'hover'        => 'tabs',
				'default'      => '#0c71c3',
				'tab_slug'     => 'advanced',
				'toggle_slug'  => 'skills_settings',
				'description'  => esc_html__( 'Here you can choose a custom color to be used for the filled skills bar.', 'divi-plus' ),
			),
			'arrows_custom_padding' => array(
                'label'                 => esc_html__( 'Arrows Padding', 'divi-plus' ),
                'type'                  => 'custom_padding',
                'option_category'       => 'layout',
                'show_if'         		=> array(
					'show_arrow' => 'on',
				),
				'default'				=> '8px|8px|8px|8px|true|true',
            	'default_on_front'		=> '8px|8px|8px|8px|true|true',
                'mobile_options'        => true,
                'hover'                 => false,
                'tab_slug'              => 'advanced',
                'toggle_slug'           => 'slider_styles',
                'description'           => esc_html__( 'Padding adds extra space to the inside of the element, increasing the distance between the edge of the element and its inner contents.', 'divi-plus' ),
            ),
			'arrow_font_size' => array(
				'label'           => esc_html__( 'Arrow Font Size', 'divi-plus' ),
				'type'            => 'range',
				'option_category' => 'layout',
				'range_settings'  => array(
					'min'  => '10',
					'max'  => '100',
					'step' => '1',
				),
				'show_if'         => array(
					'show_arrow' => 'on',
				),
				'mobile_options'  => true,
				'default'         => '18px',
				'tab_slug'        => 'advanced',
				'toggle_slug'     => 'slider_styles',
				'description'     => esc_html__( 'Move the slider or input the value to increse or decrease the size of arrows.', 'divi-plus' ),
			),
			'arrow_color' => array(
				'label'        => esc_html__( 'Arrow Color', 'divi-plus' ),
				'type'         => 'color-alpha',
				'custom_color' => true,
				'show_if'      => array(
					'show_arrow' => 'on',
				),
				'default'      => '#007aff',
				'hover'        => 'tabs',
				'tab_slug'     => 'advanced',
				'toggle_slug'  => 'slider_styles',
				'description'  => esc_html__( 'Here you can choose a custom color to be used for arrows.', 'divi-plus' ),
			),
			'arrow_background_color' => array(
				'label'        => esc_html__( 'Arrow Background', 'divi-plus' ),
				'type'         => 'color-alpha',
				'custom_color' => true,
				'show_if'      => array(
					'show_arrow'           => 'on',
				),
				'hover'        => 'tabs',
				'tab_slug'     => 'advanced',
				'toggle_slug'  => 'slider_styles',
				'description'  => esc_html__( 'Here you can choose a custom color to be used for the background of arrows.', 'divi-plus' ),
			),
			'arrow_background_border_radius'          => array(
				'label'           => esc_html__( 'Arrow Border Radius', 'divi-plus' ),
				'type'            => 'range',
				'option_category' => 'layout',
				'range_settings'  => array(
					'min'  => '0',
					'max'  => '500',
					'step' => '1',
				),
				'show_if'         => array(
					'show_arrow'           => 'on',
				),
				'default'         => '0px',
				'tab_slug'        => 'advanced',
				'toggle_slug'     => 'slider_styles',
				'description'     => esc_html__( 'Move the slider or input the value to increase or decrease the border radius of the arrow background.', 'divi-plus' ),
			),
			'arrow_background_border_size' => array(
				'label'           => esc_html__( 'Arrow Background Border', 'divi-plus' ),
				'type'            => 'range',
				'option_category' => 'layout',
				'range_settings'  => array(
					'min'  => '1',
					'max'  => '10',
					'step' => '1',
				),
				'show_if'         => array(
					'show_arrow'           => 'on',
				),
				'default'         => '0px',
				'tab_slug'        => 'advanced',
				'toggle_slug'     => 'slider_styles',
				'description'     => esc_html__( 'Move the slider or input the value to increase or decrease the border size of the arrow background.', 'divi-plus' ),
			),
			'arrow_shape_border_color' => array(
				'label'        => esc_html__( 'Arrow Backround Border Color', 'divi-plus' ),
				'type'         => 'color-alpha',
				'custom_color' => true,
				'show_if'      => array(
					'show_arrow'           => 'on',
				),
				'hover'        => 'tabs',
				'tab_slug'     => 'advanced',
				'toggle_slug'  => 'slider_styles',
				'description'  => esc_html__( 'Here you can choose a custom color to be used for the arrow shape border', 'divi-plus' ),
			),
			'control_dot_active_color' => array(
				'label'        => esc_html__( 'Active Dot Pagination Color', 'divi-plus' ),
				'type'         => 'color-alpha',
				'custom_color' => true,
				'show_if'      => array(
					'show_control_dot' => 'on',
				),
				'default'      => '#000000',
				'tab_slug'     => 'advanced',
				'toggle_slug'  => 'slider_styles',
				'description'  => esc_html__( 'Here you can choose a custom color to be used for the pagination of an active item.', 'divi-plus' ),
			),
			'control_dot_inactive_color' => array(
				'label'        => esc_html__( 'Inactive Dot Pagination Color', 'divi-plus' ),
				'type'         => 'color-alpha',
				'custom_color' => true,
				'show_if'      => array(
					'show_control_dot' => 'on',
				),
				'default'      => '#007aff',
				'tab_slug'     => 'advanced',
				'toggle_slug'  => 'slider_styles',
				'description'  => esc_html__( 'Here you can choose a custom color to be used for the pagination of inactive items.', 'divi-plus' ),
			),
			'image_height'                 => array(
				'label'           => esc_html__( 'Image Height', 'divi-plus' ),
				'type'            => 'range',
				'option_category' => 'layout',
				'range_settings'  => array(
					'min'  => '100',
					'max'  => '1000',
					'step' => '1',
				),
				'mobile_options'  => 'true',
				'validate_unit'   => true,
				'allowed_values'  => et_builder_get_acceptable_css_string_values( 'height' ),
				'default'         => 'auto',
				'default_unit'    => 'px',
				'tab_slug'        => 'advanced',
				'toggle_slug'     => 'image',
				'description'     => esc_html__( 'Move the slider or input the value to increase or decrease the image height.', 'divi-plus' ),
			),
			'__team_slider_data' => array(
				'type'                => 'computed',
				'computed_callback'   => array( 'DIPL_TeamSlider', 'get_team_members' ),
				'computed_depends_on' => array(
					'posts_number',
					'post_order',
					'post_order_by',
					'include_categories',
					'show_short_desc',
					'show_designation',
					'show_social_icon',
					'social_icon_link_target',
					'show_skills',
					'slider_layout',
					'name_level',
					'designation_level',
					'enable_member_link',
					'link_target',
				),
			),
		);
		$team_slider_fields = array_merge( $team_slider_fields, $this->generate_background_options( 'slide_bg', 'skip', 'general', 'background', 'slide_bg_color' ) );

		return $team_slider_fields;
	}

	public static function get_team_members( $attrs = array(), $conditional_tags = array(), $current_page = array() ) {
		global $et_fb_processing_shortcode_object, $et_pb_rendering_column_content;

		if ( self::$rendering ) {
			// We are trying to render a Blog module while a Blog module is already being rendered
			// which means we have most probably hit an infinite recursion. While not necessarily
			// the case, rendering a post which renders a Blog module which renders a post
			// which renders a Blog module is not a sensible use-case.
			return '';
		}

		/*
		 * Cached $wp_filter so it can be restored at the end of the callback.
		 * This is needed because this callback uses the_content filter / calls a function
		 * which uses the_content filter. WordPress doesn't support nested filter
		 */
		global $wp_filter;
		$wp_filter_cache = $wp_filter;

		$global_processing_original_value = $et_fb_processing_shortcode_object;

		$defaults = array(
			'posts_number'       		=> '10',
			'post_order'         		=> 'DESC',
			'post_order_by'      		=> 'date',
			'include_categories' 		=> '',
			'slider_layout'      		=> 'layout1',
			'show_short_desc'    		=> 'on',
			'show_designation'      	=> 'on',
			'show_social_icon'   		=> 'on',
			'social_icon_link_target'	=> 'off',
			'show_skills'        		=> 'on',
			'name_level'				=> 'h2',
			'designation_level'			=> 'h4',
			'enable_member_link' 		=> 'off',
			'link_target'				=> 'off',
		);

		// WordPress' native conditional tag is only available during page load. It'll fail during component update because
		// et_pb_process_computed_property() is loaded in admin-ajax.php. Thus, use WordPress' conditional tags on page load and
		// rely to passed $conditional_tags for AJAX call.
		$is_front_page     = (bool) et_fb_conditional_tag( 'is_front_page', $conditional_tags );
		$is_single         = (bool) et_fb_conditional_tag( 'is_single', $conditional_tags );
		$is_user_logged_in = (bool) et_fb_conditional_tag( 'is_user_logged_in', $conditional_tags );
		$current_post_id   = isset( $current_page['id'] ) ? (int) $current_page['id'] : 0;

		$attrs = wp_parse_args( $attrs, $defaults );

		foreach ( $defaults as $key => $default ) {
			${$key} = esc_html( et_()->array_get( $attrs, $key, $default ) );
		}

		$processed_name_level     		= et_pb_process_header_level( $name_level, 'h2' );
		$processed_name_level     		= esc_html( $processed_name_level );
		$processed_designation_level 	= et_pb_process_header_level( $designation_level, 'h4' );
		$processed_designation_level 	= esc_html( $processed_designation_level );

		$args = array(
			'post_type'      => 'dipl-team-member',
			'posts_per_page' => intval( $posts_number ),
			'post_status'    => 'publish',
			'orderby'        => 'date',
			'order'          => 'DESC',
		);

		if ( is_user_logged_in() ) {
			$args['post_status'] = array( 'publish', 'private' );
		}

		if ( '' !== $include_categories ) {
			$args['tax_query'] = array(
				array(
					'taxonomy' => 'dipl-team-member-category',
					'field'    => 'term_id',
					'terms'    => array_map( 'intval', explode( ',', $include_categories ) ),
					'operator' => 'IN',
				),
			);
		}

		if ( isset( $post_order_by ) && '' !== $post_order_by ) {
			$args['orderby'] = sanitize_text_field( $post_order_by );
		}

		if ( isset( $post_order ) && '' !== $post_order ) {
			$args['order'] = sanitize_text_field( $post_order );
		}

		global $wp_the_query;
		$query_backup = $wp_the_query;

		$query = new WP_Query( $args );

		self::$rendering = true;

		$output_array = array();

		if ( $query->have_posts() ) {

			while ( $query->have_posts() ) {
				$query->the_post();
				$post_id           = intval( get_the_ID() );
				$member_name       = esc_html( get_the_title( $post_id ) );
				$has_member_image  = has_post_thumbnail( $post_id );
				$meta_fields       = get_post_meta( $post_id );
				$skill_bar 		   = '';
				$output            = '';

				if ( 'on' === $show_skills && '' !== $meta_fields['dipl_team_member_skills'][0] && '' !== $meta_fields['dipl_team_member_skills_value'][0] ) {
					$team_skills       = explode( ',', $meta_fields['dipl_team_member_skills'][0] );
					$team_skills_value = explode( ',', $meta_fields['dipl_team_member_skills_value'][0] );

					for ( $i = 0; $i < count( $team_skills ); $i++ ) {
						$filled_bar_size = $team_skills_value[ $i ] . '%';

						$skill_bar .= sprintf(
							'<div class="dipl_skill_bar_wrapper_inner">
												<div class="dipl_skill_name">
													%1$s
												</div>
												<div class="dipl_empty_bar">
													<div class="dipl_filled_bar" data-skill="%2$s"></div>
												</div>
											</div>',
							$team_skills[ $i ],
							$filled_bar_size
						);
					}
				}

				if ( '' !== $member_name ) {
					$member_name = sprintf(
						'<div class="dipl_team_member_name">
							<%2$s>%1$s</%2$s>
						</div>',
						esc_html( $member_name ),
						esc_html( $processed_name_level )
					);
				} else {
					$member_name = '';
				}

				if ( $has_member_image ) {
					$member_image = sprintf(
						'<div class="dipl_team_member_image">%1$s</div>',
						et_core_intentionally_unescaped( get_the_post_thumbnail( $post_id, 'large' ), 'html' )
					);
				} else {
					$member_image = '';
				}

				if ( 'on' === $show_short_desc && '' !== $meta_fields['dipl_team_member_short_desc'][0] ) {
					$short_description = sprintf(
						'<div class="dipl_team_member_short_desc">%1$s</div>',
						$meta_fields['dipl_team_member_short_desc'][0]
					);
				} else {
					$short_description = '';
				}

				if ( 'on' === $show_designation && '' !== $meta_fields['dipl_team_member_designation'][0] ) {
					$designation = sprintf(
						'<div class="dipl_team_member_designation">
							<%2$s>%1$s</%2$s>
						</div>',
						$meta_fields['dipl_team_member_designation'][0], $processed_designation_level );
				} else {
					$designation = '';
				}

				if ( 'on' === $show_social_icon ) {
					$website_url   	= '';
					$facebook_url  	= '';
					$twitter_url    = '';
					$linkedin_url   = '';
					$instagram_url  = '';
					$youtube_url    = '';
					$email          = '';
					$phone_number   = '';

					if ( isset( $meta_fields['dipl_team_member_website'] ) && '' !== $meta_fields['dipl_team_member_website'][0] ) {
						$website_url = sprintf(
							'<a href="%1$s" target="%2$s">
								<span class="dipl_team_member_social_icon dipl_team_website et-pb-icon">&#xe0e3;</span>
							</a>',
							$meta_fields['dipl_team_member_website'][0],
							'on' === $social_icon_link_target ? '_blank' : '_self'
						);
					}

					if ( isset( $meta_fields['dipl_team_member_facebook'] ) && '' !== $meta_fields['dipl_team_member_facebook'][0] ) {
						$facebook_url = sprintf(
							'<a href="%1$s" target="%2$s">
								<span class="dipl_team_member_social_icon dipl_team_facebook et-pb-icon">&#xe093;</span>
							</a>',
							$meta_fields['dipl_team_member_facebook'][0],
							'on' === $social_icon_link_target ? '_blank' : '_self'
						);
					}

					if ( isset( $meta_fields['dipl_team_member_twitter'] ) && '' !== $meta_fields['dipl_team_member_twitter'][0] ) {
						$twitter_url = sprintf(
							'<a href="%1$s" target="%2$s">
								<span class="dipl_team_member_social_icon dipl_team_twitter et-pb-icon">&#xe094;</span>
							</a>',
							$meta_fields['dipl_team_member_twitter'][0],
							'on' === $social_icon_link_target ? '_blank' : '_self'
						);
					}

					if ( isset( $meta_fields['dipl_team_member_linkedin'] ) && '' !== $meta_fields['dipl_team_member_linkedin'][0] ) {
						$linkedin_url = sprintf(
							'<a href="%1$s" target="%2$s">
								<span class="dipl_team_member_social_icon dipl_team_linkedin et-pb-icon">&#xe09d;</span>
							</a>',
							$meta_fields['dipl_team_member_linkedin'][0],
							'on' === $social_icon_link_target ? '_blank' : '_self'
						);
					}

					if ( isset( $meta_fields['dipl_team_member_instagram'] ) && '' !== $meta_fields['dipl_team_member_instagram'][0] ) {
						$instagram_url = sprintf(
							'<a href="%1$s" target="%2$s">
								<span class="dipl_team_member_social_icon dipl_team_instagram et-pb-icon">&#xe09a;</span>
							</a>',
							$meta_fields['dipl_team_member_instagram'][0],
							'on' === $social_icon_link_target ? '_blank' : '_self'
						);
					}

					if ( isset( $meta_fields['dipl_team_member_youtube'] ) && '' !== $meta_fields['dipl_team_member_youtube'][0] ) {
						$youtube_url = sprintf(
							'<a href="%1$s" target="%2$s">
								<span class="dipl_team_member_social_icon dipl_team_youtube et-pb-icon">&#xe0a3;</span>
							</a>',
							$meta_fields['dipl_team_member_youtube'][0],
							'on' === $social_icon_link_target ? '_blank' : '_self'
						);
					}

					if ( isset( $meta_fields['dipl_team_member_email'] ) && '' !== $meta_fields['dipl_team_member_email'][0] ) {
						$email = sprintf(
							'<a href="mailto:%1$s" target="%2$s">
								<span class="dipl_team_member_social_icon dipl_team_email et-pb-icon">&#xe076;</span>
							</a>',
							$meta_fields['dipl_team_member_email'][0],
							'on' === $social_icon_link_target ? '_blank' : '_self'
						);
					}

					if ( isset( $meta_fields['dipl_team_member_phone'] ) && '' !== $meta_fields['dipl_team_member_phone'][0] ) {
						$phone_number = sprintf(
							'<a href="tel:%1$s" target="%2$s">
								<span class="dipl_team_member_social_icon dipl_team_phone et-pb-icon">&#xe090;</span>
							</a>',
							$meta_fields['dipl_team_member_phone'][0],
							'on' === $social_icon_link_target ? '_blank' : '_self'
						);
					}
				}

				if ( file_exists( get_stylesheet_directory() . '/divi-plus/layouts/team-slider/' . sanitize_file_name( $slider_layout ) . '.php' ) ) {
					include get_stylesheet_directory() . '/divi-plus/layouts/team-slider/' . sanitize_file_name( $slider_layout ) . '.php';
				} elseif ( file_exists( plugin_dir_path( __FILE__ ) . 'layouts/' . sanitize_file_name( $slider_layout ) . '.php' ) ) {	
					include plugin_dir_path( __FILE__ ) . 'layouts/' . sanitize_file_name( $slider_layout ) . '.php';
				}

				array_push( $output_array, $output );
			}

			wp_reset_postdata();

			//phpcs:ignore WordPress.WP.GlobalVariablesOverride.Prohibited
			$wp_the_query = $query_backup;
		} else {
			$output_array = '';
		}

		self::$rendering = false;

		return $output_array;
	}

	public function render( $attrs, $content, $render_slug ) {
		if ( self::$rendering ) {
			// We are trying to render a Blog module while a Blog module is already being rendered
			// which means we have most probably hit an infinite recursion. While not necessarily
			// the case, rendering a post which renders a Blog module which renders a post
			// which renders a Blog module is not a sensible use-case.
			return '';
		}

		/*
		 * Cached $wp_filter so it can be restored at the end of the callback.
		 * This is needed because this callback uses the_content filter / calls a function
		 * which uses the_content filter. WordPress doesn't support nested filter
		 */
		global $wp_filter;
		$wp_filter_cache = $wp_filter;

		$slider_layout                      = esc_attr( $this->props['slider_layout'] );
		$posts_number                       = esc_attr( $this->props['posts_number'] );
		$post_order                         = esc_attr( $this->props['post_order'] );
		$post_order_by                      = esc_attr( $this->props['post_order_by'] );
		$include_categories                 = esc_attr( $this->props['include_categories'] );
		$no_result_text						= esc_attr( $this->props['no_result_text'] );
		$show_short_desc                    = esc_attr( $this->props['show_short_desc'] );
		$show_designation                   = esc_attr( $this->props['show_designation'] );
		$show_social_icon                   = esc_attr( $this->props['show_social_icon'] );
		$social_icon_link_target			= esc_attr( $this->props['social_icon_link_target'] );
		$show_skills                        = esc_attr( $this->props['show_skills'] );
		$equalize_posts_height              = esc_attr( $this->props['equalize_posts_height'] );
		$enable_linear_transition			= esc_attr( $this->props['enable_linear_transition'] );
		$social_icon_separator_color        = esc_attr( $this->props['social_icon_separator_color'] );
		$social_icon_separator_color_hover  = esc_attr( $this->get_hover_value( 'social_icon_separator_color' ) );
		$social_icon_separator_size         = et_pb_responsive_options()->get_property_values( $this->props, 'social_icon_separator_size' );
		$social_icon_size                   = et_pb_responsive_options()->get_property_values( $this->props, 'social_icon_size' );
		$social_icon_color                  = esc_attr( $this->props['social_icon_color'] );
		$social_icon_color_hover            = esc_attr( $this->get_hover_value( 'social_icon_color' ) );
		$social_icon_background_color       = esc_attr( $this->props['social_icon_background_color'] );
		$social_icon_background_color_hover = esc_attr( $this->get_hover_value( 'social_icon_background_color' ) );
		$social_icon_alignment           	= esc_attr( $this->props['social_icon_alignment'] );
		$skill_bar_height       			= et_pb_responsive_options()->get_property_values( $this->props, 'skill_bar_height' );
		$empty_bar_color        			= esc_attr( $this->props['empty_bar_color'] );
		$empty_bar_color_hover  			= esc_attr( $this->get_hover_value( 'empty_bar_color' ) );
		$filled_bar_color       			= esc_attr( $this->props['filled_bar_color'] );
		$filled_bar_color_hover 			= esc_attr( $this->get_hover_value( 'filled_bar_color' ) );
		$show_arrow                     	= esc_attr( $this->props['show_arrow'] );
		$previous_slide_arrow           	= esc_attr( $this->props['previous_slide_arrow'] );
		$next_slide_arrow               	= esc_attr( $this->props['next_slide_arrow'] );
		$show_arrow_on_hover            	= esc_attr( $this->props['show_arrow_on_hover'] );
		$arrow_color                    	= esc_attr( $this->props['arrow_color'] );
		$arrow_color_hover              	= esc_attr( $this->get_hover_value( 'arrow_color' ) );
		$arrow_background_color         	= esc_attr( $this->props['arrow_background_color'] );
		$arrow_background_color_hover   	= esc_attr( $this->get_hover_value( 'arrow_background_color' ) );
		$arrow_background_border_size   	= esc_attr( $this->props['arrow_background_border_size'] );
		$arrow_shape_border_color       	= esc_attr( $this->props['arrow_shape_border_color'] );
		$arrow_shape_border_color_hover 	= esc_attr( $this->get_hover_value( 'arrow_shape_border_color' ) );
		$show_control_dot               	= esc_attr( $this->props['show_control_dot'] );
		$control_dot_style					= esc_attr( $this->props['control_dot_style'] );
		$control_dot_active_color   		= esc_attr( $this->props['control_dot_active_color'] );
		$control_dot_inactive_color 		= esc_attr( $this->props['control_dot_inactive_color'] );
		$transition_duration				= (int) esc_attr( $this->props['transition_duration'] );
		$post_per_slide             		= (int) esc_attr( $this->props['post_per_slide'] );
		$enable_coverflow_shadow         	= esc_attr( $this->props['enable_coverflow_shadow'] );
		$coverflow_shadow_color          	= esc_attr( $this->props['coverflow_shadow_color'] );
		$enable_member_link					= esc_attr( $this->props['enable_member_link'] );
		$link_target						= esc_attr( $this->props['link_target'] );
		$arrows_position					= et_pb_responsive_options()->get_property_values( $this->props, 'arrows_position' );
		$arrows_position					= array_filter( $arrows_position );
		$order_class  						= $this->get_module_order_class( $render_slug );
		$order_number 						= esc_attr( preg_replace( '/[^0-9]/', '', esc_attr( $order_class ) ) );
		$name_level               			= esc_html( $this->props['name_level'] );
		$designation_level           		= esc_html( $this->props['designation_level'] );
		$processed_name_level     			= et_pb_process_header_level( $name_level, 'h2' );
		$processed_designation_level 		= et_pb_process_header_level( $designation_level, 'h4' );
		$processed_name_level     			= esc_html( $processed_name_level );
		$processed_designation_level 		= esc_html( $processed_designation_level );

		$args = array(
			'post_type'      => 'dipl-team-member',
			'posts_per_page' => intval( $posts_number ),
			'post_status'    => 'publish',
			'orderby'        => 'date',
			'order'          => 'DESC',
		);

		if ( is_user_logged_in() ) {
			$args['post_status'] = array( 'publish', 'private' );
		}

		if ( '' !== $include_categories ) {
			$args['tax_query'] = array(
				array(
					'taxonomy' => 'dipl-team-member-category',
					'field'    => 'term_id',
					'terms'    => array_map( 'intval', explode( ',', $include_categories ) ),
					'operator' => 'IN',
				),
			);
		}

		if ( isset( $post_order_by ) && '' !== $post_order_by ) {
			$args['orderby'] = sanitize_text_field( $post_order_by );
		}

		if ( isset( $post_order ) && '' !== $post_order ) {
			$args['order'] = sanitize_text_field( $post_order );
		}

		global $wp_the_query;
		$query_backup = $wp_the_query;

		$args = apply_filters( 'dipl_team_slider_args', $args, $this );

		$query = new WP_Query( $args );

		self::$rendering = true;

		if ( $query->have_posts() ) {

			wp_enqueue_script( 'elicus-swiper-script' );
			wp_enqueue_style( 'elicus-swiper-style' );
			wp_enqueue_style( 'dipl-swiper-style' );

			wp_enqueue_script( 'dipl-team-slider-custom', PLUGIN_PATH."includes/modules/TeamSlider/dipl-team-slider-custom.min.js", array('jquery'), '1.0.3', true );

			$file = et_is_builder_plugin_active() ? 'style-dbp' : 'style';
        	wp_enqueue_style( 'dipl-team-slider-style', PLUGIN_PATH . 'includes/modules/TeamSlider/' . $file . '.min.css', array(), '1.0.0' );

			if ( 'on' === $show_skills ) {
				if ( ! empty( array_filter( $skill_bar_height ) ) ) {
					et_pb_responsive_options()->generate_responsive_css( $skill_bar_height, '%%order_class%% .dipl_skill_bar_wrapper  .dipl_empty_bar', 'height', $render_slug, '!important;', 'range' );
				}

				if ( '' !== $empty_bar_color ) {
					self::set_style(
						$render_slug,
						array(
							'selector'    => '%%order_class%% .dipl_skill_bar_wrapper .dipl_empty_bar',
							'declaration' => sprintf( 'background-color: %1$s !important;', esc_attr( $empty_bar_color ) ),
						)
					);
				}

				if ( '' !== $empty_bar_color_hover ) {
					self::set_style(
						$render_slug,
						array(
							'selector'    => '%%order_class%%:hover .dipl_skill_bar_wrapper .dipl_empty_bar',
							'declaration' => sprintf( 'background-color: %1$s !important;', esc_attr( $empty_bar_color_hover ) ),
						)
					);
				}

				if ( '' !== $filled_bar_color ) {
					self::set_style(
						$render_slug,
						array(
							'selector'    => '%%order_class%% .dipl_skill_bar_wrapper .dipl_filled_bar',
							'declaration' => sprintf( 'background-color: %1$s !important;', esc_attr( $filled_bar_color ) ),
						)
					);
				}

				if ( '' !== $filled_bar_color_hover ) {
					self::set_style(
						$render_slug,
						array(
							'selector'    => '%%order_class%%:hover .dipl_skill_bar_wrapper .dipl_filled_bar',
							'declaration' => sprintf( 'background-color: %1$s !important;', esc_attr( $filled_bar_color_hover ) ),
						)
					);
				}
			}

			if ( 'on' === $enable_coverflow_shadow ) {
				self::set_style(
					$render_slug,
					array(
						'selector'    => '%%order_class%% .swiper-container-3d .swiper-slide-shadow-left',
						'declaration' => sprintf( 'background-image: linear-gradient(to left,%1$s,rgba(0,0,0,0)) !important;', esc_attr( $coverflow_shadow_color ) ),
					)
				);
				self::set_style(
					$render_slug,
					array(
						'selector'    => '%%order_class%% .swiper-container-3d .swiper-slide-shadow-right',
						'declaration' => sprintf( 'background-image: linear-gradient(to right,%1$s,rgba(0,0,0,0)) !important;', esc_attr( $coverflow_shadow_color ) ),
					)
				);
			} else {
				self::set_style(
					$render_slug,
					array(
						'selector'    => '%%order_class%% .swiper-container-3d .swiper-slide-shadow-left, %%order_class%% .swiper-container-3d .swiper-slide-shadow-right',
						'declaration' => 'background-image: none !important;',
					)
				);
			}

			if ( 'on' === $show_social_icon ) {
				if ( 'dipl_icon_center' === $social_icon_alignment ) {
					self::set_style(
						$render_slug,
						array(
							'selector'    => '%%order_class%% .dipl_team_social_wrapper',
							'declaration' => 'justify-content: center;',
						)
					);
				} else if ( 'dipl_icon_left' === $social_icon_alignment ) {
					self::set_style(
						$render_slug,
						array(
							'selector'    => '%%order_class%% .dipl_team_social_wrapper',
							'declaration' => 'justify-content: flex-start;',
						)
					);
				} else if ( 'dipl_icon_right' === $social_icon_alignment ) {
					self::set_style(
						$render_slug,
						array(
							'selector'    => '%%order_class%% .dipl_team_social_wrapper',
							'declaration' => 'justify-content: flex-end;',
						)
					);
				}

				if (  '' !== $social_icon_color || '' !== $social_icon_color_hover || '' !== $social_icon_background_color || '' !== $social_icon_background_color_hover ) {
					self::set_style(
						$render_slug,
						array(
							'selector'    => '%%order_class%% .dipl_team_instagram',
							'declaration' => 'background: none; -webkit-background-clip: unset; background-clip: unset; -webkit-text-fill-color: unset;',
						)
					);
				}

				if ( '' !== $social_icon_color ) {
					self::set_style(
						$render_slug,
						array(
							'selector'    => '%%order_class%% .dipl_team_social_wrapper a, %%order_class%% .dipl_team_member_social_icon',
							'declaration' => sprintf( 'color: %1$s !important;', esc_attr( $social_icon_color ) ),
						)
					);
				}

				if ( '' !== $social_icon_color_hover ) {
					self::set_style(
						$render_slug,
						array(
							'selector'    => '%%order_class%% .dipl_team_social_wrapper a:hover, %%order_class%% .dipl_team_member_social_icon:hover',
							'declaration' => sprintf( 'color: %1$s !important;', esc_attr( $social_icon_color_hover ) ),
						)
					);
				}

				if ( '' !== $social_icon_background_color ) {
					self::set_style(
						$render_slug,
						array(
							'selector'    => '%%order_class%% .dipl_team_member_social_icon',
							'declaration' => sprintf( 'background-color: %1$s !important;', esc_attr( $social_icon_background_color ) ),
						)
					);
				}

				if ( '' !== $social_icon_background_color_hover ) {
					self::set_style(
						$render_slug,
						array(
							'selector'    => '%%order_class%% .dipl_team_member_social_icon:hover',
							'declaration' => sprintf( 'background-color: %1$s !important;', esc_attr( $social_icon_background_color_hover ) ),
						)
					);
				}

				et_pb_responsive_options()->generate_responsive_css( $social_icon_size, '%%order_class%% .dipl_team_member_social_icon', 'font-size', $render_slug, '!important;', 'range' );
			}

			if( 'on' === $show_social_icon && 'layout1' === $slider_layout ) {
				if ( ! empty( array_filter( $social_icon_separator_size ) ) ) {
					et_pb_responsive_options()->generate_responsive_css( $social_icon_separator_size, '%%order_class%% .layout1 .dipl_team_social_wrapper', 'border-width', $render_slug, '', 'type' );
				}

				if ( '' !== $social_icon_separator_color ) {
					self::set_style(
						$render_slug,
						array(
							'selector'    => '%%order_class%% .layout1 .dipl_team_social_wrapper',
							'declaration' => sprintf( 'border-color: %1$s;', esc_attr( $social_icon_separator_color ) ),
						)
					);
				}

				if ( '' !== $social_icon_separator_color_hover ) {
					self::set_style(
						$render_slug,
						array(
							'selector'    => '%%order_class%% .layout1 .dipl_team_social_wrapper:hover',
							'declaration' => sprintf( 'border-color: %1$s;', esc_attr( $social_icon_separator_color_hover ) ),
						)
					);
				}
			}

			if ( 'on' === $show_arrow ) {
				if ( $arrow_color ) {
					self::set_style(
						$render_slug,
						array(
							'selector'    => '%%order_class%% .dipl_swiper_navigation .swiper-button-prev, %%order_class%% .dipl_swiper_navigation .swiper-button-next',
							'declaration' => sprintf( 'color: %1$s !important;', esc_attr( $arrow_color ) ),
						)
					);
				}

				if ( $arrow_color_hover ) {
					self::set_style(
						$render_slug,
						array(
							'selector'    => '%%order_class%% .dipl_swiper_navigation .swiper-button-prev:hover, %%order_class%% .dipl_swiper_navigation .swiper-button-next:hover',
							'declaration' => sprintf( 'color: %1$s !important;', esc_attr( $arrow_color_hover ) ),
						)
					);
				}

				$arrow_font_size = et_pb_responsive_options()->get_property_values( $this->props, 'arrow_font_size' );
				if ( ! empty( array_filter( $arrow_font_size ) ) ) {
					et_pb_responsive_options()->generate_responsive_css( $arrow_font_size, '%%order_class%% .dipl_swiper_navigation .swiper-button-prev, %%order_class%% .dipl_swiper_navigation .swiper-button-next', 'font-size', $render_slug, '!important;', 'range' );
				}

				$image_height = et_pb_responsive_options()->get_property_values( $this->props, 'image_height' );
				if ( ! empty( array_filter( $image_height ) ) ) {
					et_pb_responsive_options()->generate_responsive_css( $image_height, '%%order_class%% .dipl_swiper_wrapper .dipl_team_member_image img', 'height', $render_slug, '!important;', 'range' );
				}

				if ( '' !== $this->props['next_slide_arrow'] ) {
					self::set_style(
						$render_slug,
						array(
							'selector'    => '%%order_class%% .dipl_swiper_navigation .swiper-button-next::after',
							'declaration' => 'display: flex; align-items: center; height: 100%; content: attr(data-next_slide_arrow);',
						)
					);
					if ( class_exists( 'ET_Builder_Module_Helper_Style_Processor' ) && method_exists( 'ET_Builder_Module_Helper_Style_Processor', 'process_extended_icon' ) ) {
						$this->generate_styles(
							array(
								'utility_arg'    => 'icon_font_family',
								'render_slug'    => $render_slug,
								'base_attr_name' => 'next_slide_arrow',
								'important'      => true,
								'selector'       => '%%order_class%% .dipl_swiper_navigation .swiper-button-next::after',
								'processor'      => array(
									'ET_Builder_Module_Helper_Style_Processor',
									'process_extended_icon',
								),
							)
						);
					} else {
						self::set_style(
							$render_slug,
							array(
								'selector'    => '%%order_class%% .dipl_swiper_navigation .swiper-button-next::after',
								'declaration' => 'font-family: "ETmodules";',
							)
						);
					}
				}

				if ( '' !== $this->props['previous_slide_arrow'] ) {
					self::set_style(
						$render_slug,
						array(
							'selector'    => '%%order_class%% .dipl_swiper_navigation .swiper-button-prev::after',
							'declaration' => 'display: flex; align-items: center; height: 100%; content: attr(data-previous_slide_arrow);',
						)
					);
					if ( class_exists( 'ET_Builder_Module_Helper_Style_Processor' ) && method_exists( 'ET_Builder_Module_Helper_Style_Processor', 'process_extended_icon' ) ) {
						$this->generate_styles(
							array(
								'utility_arg'    => 'icon_font_family',
								'render_slug'    => $render_slug,
								'base_attr_name' => 'previous_slide_arrow',
								'important'      => true,
								'selector'       => '%%order_class%% .dipl_swiper_navigation .swiper-button-prev::after',
								'processor'      => array(
									'ET_Builder_Module_Helper_Style_Processor',
									'process_extended_icon',
								),
							)
						);
					} else {
						self::set_style(
							$render_slug,
							array(
								'selector'    => '%%order_class%% .dipl_swiper_navigation .swiper-button-prev::after',
								'declaration' => 'font-family: "ETmodules";',
							)
						);
					}
				}

				if ( 'on' === $show_arrow_on_hover ) {
					self::set_style(
						$render_slug,
						array(
							'selector'    => '%%order_class%% .dipl_swiper_navigation .swiper-button-prev',
							'declaration' => 'visibility: hidden; opacity: 0; transition: all 300ms ease;',
						)
					);
					self::set_style(
						$render_slug,
						array(
							'selector'    => '%%order_class%% .dipl_swiper_navigation .swiper-button-next',
							'declaration' => 'visibility: hidden; opacity: 0; transition: all 300ms ease;',
						)
					);
					self::set_style(
						$render_slug,
						array(
							'selector'    => '%%order_class%%:hover .dipl_swiper_navigation .swiper-button-prev, %%order_class%%:hover .dipl_swiper_navigation .swiper-button-next',
							'declaration' => 'visibility: visible; opacity: 1;',
						)
					);
					self::set_style(
						$render_slug,
						array(
							'selector'    => '%%order_class%%:hover .dipl_swiper_navigation .swiper-button-prev.swiper-button-disabled, %%order_class%%:hover .dipl_swiper_navigation .swiper-button-next.swiper-button-disabled',
							'declaration' => 'opacity: 0.35;',
						)
					);
					
					/* Outside Slider */
					self::set_style(
						$render_slug,
						array(
							'selector'    => '%%order_class%% .dipl_arrows_outside .swiper-button-prev',
							'declaration' => 'left: 50px;',
						)
					);
					self::set_style(
						$render_slug,
						array(
							'selector'    => '%%order_class%% .dipl_arrows_outside .swiper-button-next',
							'declaration' => 'right: 50px;',
						)
					);
					self::set_style(
						$render_slug,
						array(
							'selector'    => '%%order_class%%:hover .dipl_arrows_outside .swiper-button-prev',
							'declaration' => 'left: 0;',
						)
					);
					self::set_style(
						$render_slug,
						array(
							'selector'    => '%%order_class%%:hover .dipl_arrows_outside .swiper-button-next',
							'declaration' => 'right: 0;',
						)
					);
					/* Inside Slider */
					self::set_style(
						$render_slug,
						array(
							'selector'    => '%%order_class%% .dipl_arrows_inside .swiper-button-prev',
							'declaration' => 'left: -50px;',
						)
					);
					self::set_style(
						$render_slug,
						array(
							'selector'    => '%%order_class%% .dipl_arrows_inside .swiper-button-next',
							'declaration' => 'right: -50px;',
						)
					);
					self::set_style(
						$render_slug,
						array(
							'selector'    => '%%order_class%%:hover .dipl_arrows_inside .swiper-button-prev',
							'declaration' => 'left: 0;',
						)
					);
					self::set_style(
						$render_slug,
						array(
							'selector'    => '%%order_class%%:hover .dipl_arrows_inside .swiper-button-next',
							'declaration' => 'right: 0;',
						)
					);

				}

				if ( '' !== $arrow_background_color ) {
					self::set_style(
						$render_slug,
						array(
							'selector'    => '%%order_class%% .dipl_swiper_navigation .swiper-button-prev, %%order_class%% .dipl_swiper_navigation .swiper-button-next',
							'declaration' => sprintf( 'background: %1$s !important;', esc_attr( $arrow_background_color ) ),
						)
					);
				}

				if ( '' !== $arrow_background_color_hover ) {
					self::set_style(
						$render_slug,
						array(
							'selector'    => '%%order_class%% .dipl_swiper_navigation .swiper-button-prev:hover, %%order_class%% .dipl_swiper_navigation .swiper-button-next:hover',
							'declaration' => sprintf( 'background: %1$s !important;', esc_attr( $arrow_background_color_hover ) ),
						)
					);
				}

				if ( '' !== $this->props['arrow_background_border_radius'] ) {
					self::set_style( $render_slug, array(
						'selector'    => '%%order_class%% .dipl_swiper_navigation .swiper-button-prev, %%order_class%% .dipl_swiper_navigation .swiper-button-next',
						'declaration' => sprintf( 'border-radius: %1$s;', esc_attr( $this->props['arrow_background_border_radius'] ) ),
					) );
				}
				if ( '' !== $arrow_background_border_size ) {
					self::set_style( $render_slug, array(
						'selector'    => '%%order_class%% .dipl_swiper_navigation .swiper-button-prev, %%order_class%% .dipl_swiper_navigation .swiper-button-next',
						'declaration' => sprintf( 'border-width: %1$s;', esc_attr( $arrow_background_border_size ) ),
					) );
				}

				if ( '' !== $arrow_shape_border_color ) {
					self::set_style(
						$render_slug,
						array(
							'selector'    => '%%order_class%% .dipl_swiper_navigation .swiper-button-prev, %%order_class%% .dipl_swiper_navigation .swiper-button-next',
							'declaration' => sprintf( 'border-color: %1$s;', esc_attr( $arrow_shape_border_color ) ),
						)
					);
				}

				if ( '' !== $arrow_shape_border_color_hover ) {
					self::set_style(
						$render_slug,
						array(
							'selector'    => '%%order_class%% .dipl_swiper_navigation .swiper-button-prev:hover, %%order_class%% .dipl_swiper_navigation .swiper-button-next:hover',
							'declaration' => sprintf( 'border-color: %1$s;', esc_attr( $arrow_shape_border_color_hover ) ),
						)
					);
				}
			}

			if ( 'on' === $show_control_dot ) {
				if ( '' !== $control_dot_inactive_color ) {
					self::set_style(
						$render_slug,
						array(
							'selector'    => '%%order_class%% .swiper-pagination-bullet',
							'declaration' => sprintf( 'background: %1$s !important;', esc_attr( $control_dot_inactive_color ) ),
						)
					);

					self::set_style(
						$render_slug,
						array(
							'selector'    => '%%order_class%% .transparent_dot .swiper-pagination-bullet',
							'declaration' => sprintf( 'border-color: %1$s;', esc_attr( $control_dot_inactive_color ) ),
						)
					);
				}

				if ( '' !== $control_dot_active_color ) {
					self::set_style(
						$render_slug,
						array(
							'selector'    => '%%order_class%% .swiper-pagination-bullet.swiper-pagination-bullet-active',
							'declaration' => sprintf( 'background: %1$s !important;', esc_attr( $control_dot_active_color ) ),
						)
					);

					if ( 'stretched_dot' === $control_dot_style && $transition_duration ) {
						self::set_style(
							$render_slug,
							array(
								'selector'    => '%%order_class%% .stretched_dot .swiper-pagination-bullet',
								'declaration' => sprintf( 'transition: all %1$sms ease;', intval( $transition_duration ) ),
							)
						);
					}
				}
			}

			if ( 'off' === $equalize_posts_height ) {
				if ( 1 === $post_per_slide ) {
					self::set_style(
						$render_slug,
						array(
							'selector'    => '%%order_class%% .swiper-wrapper',
							'declaration' => 'align-items: center;',
						)
					);
				}
			} else {
				self::set_style(
					$render_slug,
					array(
						'selector'    => '%%order_class%% .swiper-wrapper',
						'declaration' => 'align-items: stretch;',
					)
				);

				self::set_style(
					$render_slug,
					array(
						'selector'    => '%%order_class%% .swiper-slide',
						'declaration' => 'height: auto;',
					)
				);

				self::set_style(
					$render_slug,
					array(
						'selector'    => '%%order_class%% .dipl_team_member_card',
						'declaration' => 'height: 100%;',
					)
				);
			}

			if ( 'on' === $enable_linear_transition ) {
				self::set_style(
					$render_slug,
					array(
						'selector'    => '%%order_class%% .swiper-wrapper',
						'declaration' => 'transition-timing-function : linear !important;',
					)
				);
			}

			$output  = '<div class="dipl_swiper_wrapper">';
			$output .= sprintf(
				'<div class="dipl_team_slider_container dipl_swiper_inner_wrap %1$s">',
				esc_attr( $slider_layout )
			);
			$output .= '<div class="swiper-container">';
			$output .= '<div class="swiper-wrapper">';

			while ( $query->have_posts() ) {
				$query->the_post();

				$post_id           = intval( get_the_ID() );
				$member_name       = esc_html( get_the_title( $post_id ) );
				$has_member_image  = has_post_thumbnail( $post_id );
				$meta_fields       = get_post_meta( $post_id );
				$skill_bar         = '';

				if ( 'on' === $show_skills && '' !== $meta_fields['dipl_team_member_skills'][0] && '' !== $meta_fields['dipl_team_member_skills_value'][0] ) {
					$team_skills       = explode( ',', $meta_fields['dipl_team_member_skills'][0] );
					$team_skills_value = explode( ',', $meta_fields['dipl_team_member_skills_value'][0] );

					for ( $i = 0; $i < count( $team_skills ); $i++ ) {
						$filled_bar_size = $team_skills_value[ $i ] . '%';

						$skill_bar .= sprintf(
							'<div class="dipl_skill_bar_wrapper_inner">
												<div class="dipl_skill_name">
													%1$s
												</div>
												<div class="dipl_empty_bar">
													<div class="dipl_filled_bar" data-skill="%2$s"></div>
												</div>
											</div>',
							$team_skills[ $i ],
							$filled_bar_size
						);
					}
				}

				if ( '' !== $member_name ) {
					$member_name = sprintf(
						'<div class="dipl_team_member_name">
							<%2$s>%1$s</%2$s>
						</div>',
						esc_html( $member_name ),
						esc_html( $processed_name_level )
					);
				} else {
					$member_name = '';
				}

				if ( $has_member_image ) {
					$member_image = sprintf(
						'<div class="dipl_team_member_image">%1$s</div>',
						et_core_intentionally_unescaped( get_the_post_thumbnail( $post_id, 'large' ), 'html' )
					);
				} else {
					$member_image = '';
				}

				if ( 'on' === $show_short_desc && '' !== $meta_fields['dipl_team_member_short_desc'][0] ) {
					$short_description = sprintf(
						'<div class="dipl_team_member_short_desc">%1$s</div>',
						$meta_fields['dipl_team_member_short_desc'][0]
					);
				} else {
					$short_description = '';
				}

				if ( 'on' === $show_designation && '' !== $meta_fields['dipl_team_member_designation'][0] ) {
					$designation = sprintf(
						'<div class="dipl_team_member_designation">
							<%2$s>%1$s</%2$s>
						</div>',
						$meta_fields['dipl_team_member_designation'][0], $processed_designation_level );
				} else {
					$designation = '';
				}

				if ( 'on' === $show_social_icon ) {
					$website_url	= '';
					$facebook_url   = '';
					$twitter_url    = '';
					$linkedin_url   = '';
					$instagram_url  = '';
					$youtube_url    = '';
					$email          = '';
					$phone_number   = '';

					if ( isset( $meta_fields['dipl_team_member_website'] ) && '' !== $meta_fields['dipl_team_member_website'][0] ) {
						$website_url = sprintf(
							'<a href="%1$s" target="%2$s">
								<span class="dipl_team_member_social_icon dipl_team_website et-pb-icon">&#xe0e3;</span>
							</a>',
							$meta_fields['dipl_team_member_website'][0],
							'on' === $social_icon_link_target ? '_blank' : '_self'
						);
					}

					if ( isset( $meta_fields['dipl_team_member_facebook'] ) && '' !== $meta_fields['dipl_team_member_facebook'][0] ) {
						$facebook_url = sprintf(
							'<a href="%1$s" target="%2$s">
								<span class="dipl_team_member_social_icon dipl_team_facebook et-pb-icon">&#xe093;</span>
							</a>',
							$meta_fields['dipl_team_member_facebook'][0],
							'on' === $social_icon_link_target ? '_blank' : '_self'
						);
					}

					if ( isset( $meta_fields['dipl_team_member_twitter'] ) && '' !== $meta_fields['dipl_team_member_twitter'][0] ) {
						$twitter_url = sprintf(
							'<a href="%1$s" target="%2$s">
								<span class="dipl_team_member_social_icon dipl_team_twitter et-pb-icon">&#xe094;</span>
							</a>',
							$meta_fields['dipl_team_member_twitter'][0],
							'on' === $social_icon_link_target ? '_blank' : '_self'
						);
					}

					if ( isset( $meta_fields['dipl_team_member_linkedin'] ) && '' !== $meta_fields['dipl_team_member_linkedin'][0] ) {
						$linkedin_url = sprintf(
							'<a href="%1$s" target="%2$s">
								<span class="dipl_team_member_social_icon dipl_team_linkedin et-pb-icon">&#xe09d;</span>
							</a>',
							$meta_fields['dipl_team_member_linkedin'][0],
							'on' === $social_icon_link_target ? '_blank' : '_self'
						);
					}

					if ( isset( $meta_fields['dipl_team_member_instagram'] ) && '' !== $meta_fields['dipl_team_member_instagram'][0] ) {
						$instagram_url = sprintf(
							'<a href="%1$s" target="%2$s">
								<span class="dipl_team_member_social_icon dipl_team_instagram et-pb-icon">&#xe09a;</span>
							</a>',
							$meta_fields['dipl_team_member_instagram'][0],
							'on' === $social_icon_link_target ? '_blank' : '_self'
						);
					}

					if ( isset( $meta_fields['dipl_team_member_youtube'] ) && '' !== $meta_fields['dipl_team_member_youtube'][0] ) {
						$youtube_url = sprintf(
							'<a href="%1$s" target="%2$s">
								<span class="dipl_team_member_social_icon dipl_team_youtube et-pb-icon">&#xe0a3;</span>
							</a>',
							$meta_fields['dipl_team_member_youtube'][0],
							'on' === $social_icon_link_target ? '_blank' : '_self'
						);
					}

					if ( isset( $meta_fields['dipl_team_member_email'] ) && '' !== $meta_fields['dipl_team_member_email'][0] ) {
						$email = sprintf(
							'<a href="mailto:%1$s" target="%2$s">
								<span class="dipl_team_member_social_icon dipl_team_email et-pb-icon">&#xe076;</span>
							</a>',
							$meta_fields['dipl_team_member_email'][0],
							'on' === $social_icon_link_target ? '_blank' : '_self'
						);
					}

					if ( isset( $meta_fields['dipl_team_member_phone'] ) && '' !== $meta_fields['dipl_team_member_phone'][0] ) {
						$phone_number = sprintf(
							'<a href="tel:%1$s" target="%2$s">
								<span class="dipl_team_member_social_icon dipl_team_phone et-pb-icon">&#xe090;</span>
							</a>',
							$meta_fields['dipl_team_member_phone'][0],
							'on' === $social_icon_link_target ? '_blank' : '_self'
						);
					}
				}

				$output .= '<div class="dipl_team_member_slide swiper-slide">';
				
				if ( file_exists( get_stylesheet_directory() . '/divi-plus/layouts/team-slider/' . sanitize_file_name( $slider_layout ) . '.php' ) ) {
					include get_stylesheet_directory() . '/divi-plus/layouts/team-slider/' . sanitize_file_name( $slider_layout ) . '.php';
				} elseif ( file_exists( plugin_dir_path( __FILE__ ) . 'layouts/' . sanitize_file_name( $slider_layout ) . '.php' ) ) {
					include plugin_dir_path( __FILE__ ) . 'layouts/' . sanitize_file_name( $slider_layout ) . '.php';
				}

				$output .= '</div>';
			}

			wp_reset_postdata();

			//phpcs:ignore WordPress.WP.GlobalVariablesOverride.Prohibited
			$wp_the_query = $query_backup;

			$output .= '</div> <!-- swiper-wrapper -->';

			$output .= '</div> <!-- swiper-container -->';

			if ( 'on' === $show_arrow ) {
				$next = sprintf(
					'<div class="swiper-button-next"%1$s></div>',
					'' !== $this->props['next_slide_arrow'] ?
					sprintf(
						' data-next_slide_arrow="%1$s"',
						esc_attr( et_pb_process_font_icon( $this->props['next_slide_arrow'] ) )
					) :
					''
				);

				$prev = sprintf(
					'<div class="swiper-button-prev"%1$s></div>',
					'' !== $this->props['previous_slide_arrow'] ?
					sprintf(
						' data-previous_slide_arrow="%1$s"',
						esc_attr( et_pb_process_font_icon( $this->props['previous_slide_arrow'] ) )
					) :
					''
				);

				if ( ! empty( $arrows_position ) ) {
					$arrows_position_data = '';
					foreach( $arrows_position as $device => $value ) {
						$arrows_position_data .= ' data-arrows_' . $device . '="' . $value . '"';
					}
				}

				$output .= sprintf(
					'<div class="dipl_swiper_navigation"%3$s>%1$s %2$s</div>',
					$next,
					$prev,
					! empty( $arrows_position ) ? $arrows_position_data : ''
				);
			}

			$output .= '</div> <!-- dipl_team_slider_container -->';

			if ( 'on' === $show_control_dot ) {
				$output .= sprintf(
					'<div class="dipl_swiper_pagination"><div class="swiper-pagination %1$s"></div></div>',
					esc_attr( $control_dot_style )
				);
			}

			$output .= '</div> <!--- dipl_swiper_wrapper -->';

			$script = $this->dipl_render_slider_script();

			$output .= $script;

			$args = array(
				'render_slug'	=> $render_slug,
				'props'			=> $this->props,
				'fields'		=> $this->fields_unprocessed,
				'module'		=> $this,
				'backgrounds' 	=> array(
					'slide_bg' => array(
						'normal' => "{$this->main_css_element} .dipl_team_member_card",
						'hover' => "{$this->main_css_element} .dipl_team_member_card:hover",
		 			),
				),
			);

			DiviPlusHelper::process_background( $args );
			$fields = array( 'slider_margin_padding' );
			DiviPlusHelper::process_advanced_margin_padding_css( $this, $render_slug, $this->margin_padding, $fields );
			
		} else {
			$output = '<div class="entry">' . esc_html( $no_result_text ) . '</div>';
		}

		self::$rendering = false;

		return $output;
	}

	public function before_render() {
		$is_responsive = et_pb_responsive_options()->is_responsive_enabled( $this->props, 'post_per_slide' );
		if ( ! $is_responsive ) {
			$post_per_slide = $this->props['post_per_slide'];
			if ( 'slide' === $this->props['slide_effect'] ) {
				$post_per_slide_tablet = $post_per_slide < 4 ? $post_per_slide : 3;
				$post_per_slide_mobile = 1;
			} else if ( 'coverflow' === $this->props['slide_effect'] ) {
				$post_per_slide_tablet = 3;
				$post_per_slide_mobile = 1;
			}
			if ( isset( $post_per_slide_tablet ) && '' !== $post_per_slide_tablet ) {
				$this->props['post_per_slide_tablet'] = $post_per_slide_tablet;
			}

			if ( isset( $post_per_slide_mobile ) && '' !== $post_per_slide_mobile ) {
				$this->props['post_per_slide_phone'] = $post_per_slide_mobile;
			}
		}
	}

	public function dipl_render_slider_script() {

		$order_class     			= $this->get_module_order_class( 'dipl_team_slider' );
		$auto_height_slider			= esc_attr( $this->props['auto_height_slider'] );
		$slide_effect          		= esc_attr( $this->props['slide_effect'] );
		$show_arrow            		= esc_attr( $this->props['show_arrow'] );
		$show_control_dot          	= esc_attr( $this->props['show_control_dot'] );
		$loop                  		= esc_attr( $this->props['slider_loop'] );
		$autoplay              		= esc_attr( $this->props['autoplay'] );
		$autoplay_speed        		= intval( $this->props['autoplay_speed'] );
		$transition_duration  		= intval( $this->props['transition_duration'] );
		$pause_on_hover        		= esc_attr( $this->props['pause_on_hover'] );
		$enable_coverflow_shadow 	= 'on' === $this->props['enable_coverflow_shadow'] ? 'true' : 'false';
		$coverflow_rotate 	   		= intval( $this->props['coverflow_rotate'] );
		$coverflow_depth 	   		= intval( $this->props['coverflow_depth'] );
		$post_per_slide 			= et_pb_responsive_options()->get_property_values( $this->props, 'post_per_slide', '', true );
		$space_between_slides 		= et_pb_responsive_options()->get_property_values( $this->props, 'space_between_slides', '', true );
		$slides_per_group 			= et_pb_responsive_options()->get_property_values( $this->props, 'slides_per_group', '', true );
		$dynamic_bullets			= 'on' === $this->props['enable_dynamic_dots'] && in_array( $this->props['control_dot_style'], array( 'solid_dot', 'transparent_dot', 'square_dot' ), true ) ? 'true' : 'false';

		$autoplay_speed      		= '' !== $autoplay_speed || 0 !== $autoplay_speed ? $autoplay_speed : 3000;
		$transition_duration 		= '' !== $transition_duration || 0 !== $transition_duration ? $transition_duration : 1000;
		$auto_height_slider			= 'on' === $auto_height_slider ? 'true' : 'false';
		$loop          				= 'on' === $loop ? 'true' : 'false';
		$arrows 					= 'false';
		$dots 						= 'false';
		$autoplaySlides				= 0;
		$cube 						= 'false';
		$coverflow 					= 'false';
		$fade 						= 'false';
		$slidesPerGroup 			= 1;
		$slidesPerGroupIpad			= 1;
		$slidesPerGroupMobile		= 1;
		$slidesPerGroupSkip			= 0;
		$slidesPerGroupSkipIpad		= 0;
		$slidesPerGroupSkipMobile	= 0;

		if ( in_array( $slide_effect, array( 'slide', 'coverflow' ), true ) ) {
			$post_per_view        		= $post_per_slide['desktop'];
			$post_per_view_ipad   		= '' !== $post_per_slide['tablet'] ? $post_per_slide['tablet'] : $this->props['post_per_slide_tablet'];
			$post_per_view_mobile 		= '' !== $post_per_slide['phone'] ? $post_per_slide['phone'] : $this->props['post_per_slide_phone'];
			$post_space_between   		= $space_between_slides['desktop'];
			$post_space_between_ipad   	= '' !== $space_between_slides['tablet'] ? $space_between_slides['tablet'] : $post_space_between;
			$post_space_between_mobile  = '' !== $space_between_slides['phone'] ? $space_between_slides['phone'] : $post_space_between_ipad;
			$slidesPerGroup 			= $slides_per_group['desktop'];
			$slidesPerGroupIpad			= '' !== $slides_per_group['tablet'] ? $slides_per_group['tablet'] : $slidesPerGroup;
			$slidesPerGroupMobile		= '' !== $slides_per_group['phone'] ? $slides_per_group['phone'] : $slidesPerGroupIpad;

			if ( $post_per_view > $slidesPerGroup && 1 !== $slidesPerGroup ) {
				$slidesPerGroupSkip = $post_per_view - $slidesPerGroup;
			}
			if ( $post_per_view_ipad > $slidesPerGroupIpad && 1 !== $slidesPerGroupIpad ) {
				$slidesPerGroupSkipIpad = $post_per_view_ipad - $slidesPerGroupIpad;
			}
			if ( $post_per_view_mobile > $slidesPerGroupMobile && 1 !== $slidesPerGroupMobile ) {
				$slidesPerGroupSkipMobile = $post_per_view_mobile - $slidesPerGroupMobile;
			}
		} else {
			$post_per_view        		= 1;
			$post_per_view_ipad   		= 1;
			$post_per_view_mobile 		= 1;
			$post_space_between   		= 0;
			$post_space_between_ipad	= 0;
			$post_space_between_mobile	= 0;
		}

		if ( 'on' === $show_arrow ) {
			$arrows = "{    
                            nextEl: '." . esc_attr( $order_class ) . " .swiper-button-next',
                            prevEl: '." . esc_attr( $order_class ) . " .swiper-button-prev',
                    }";
		}

		if ( 'on' === $show_control_dot ) {
			$dots = "{
                        el: '." . esc_attr( $order_class ) . " .swiper-pagination',
                        dynamicBullets: " . $dynamic_bullets . ",
                        clickable: true,
                    }";
		}

		if ( 'on' === $autoplay ) {
			if ( 'on' === $pause_on_hover ) {
				$autoplaySlides = '{
                                delay:' . $autoplay_speed . ',
                                disableOnInteraction: true,
                            }';
			} else {
				$autoplaySlides = '{
                                delay:' . $autoplay_speed . ',
                                disableOnInteraction: false,
                            }';
			}
		}

		if ( 'coverflow' === $slide_effect ) {
			$coverflow = '{
                            rotate: ' . $coverflow_rotate . ',
                            stretch: 0,
                            depth: ' . $coverflow_depth . ',
                            modifier: 1,
                            slideShadows : ' . $enable_coverflow_shadow . ',
                        }';
		}

		if ( 'cube' === $slide_effect ) {
			$cube = '{
                        shadow: false,
                        slideShadows: false,
                    }';
		}

		if ( 'fade' === $slide_effect ) {
			$fade = '{
                crossFade: true,
            }';
		}

		$script  = '<script type="text/javascript">';
		$script .= 'jQuery(function($) {';
		$script .= 'var ' . esc_attr( $order_class ) . '_swiper = new Swiper(\'.' . esc_attr( $order_class ) . ' .swiper-container\', {
                            slidesPerView: ' . $post_per_view . ',
                            autoplay: ' . $autoplaySlides . ',
                            spaceBetween: ' . intval( $post_space_between ) . ',
                            slidesPerGroup: ' . $slidesPerGroup . ',
                            slidesPerGroupSkip: ' . $slidesPerGroupSkip . ',
                            effect: "' . $slide_effect . '",
                            cubeEffect: ' . $cube . ',
                            coverflowEffect: ' . $coverflow . ',
                            fadeEffect: ' . $fade . ',
                            speed: ' . $transition_duration . ',
                            loop: ' . $loop . ',
                            pagination: ' . $dots . ',
                            navigation: ' . $arrows . ',
                            autoHeight: ' . $auto_height_slider . ',
                            grabCursor: \'true\',
                            observer: true,
							observeParents: true,
                            breakpoints: {
                            	981: {
		                          	slidesPerView: ' . $post_per_view . ',
		                          	spaceBetween: ' . intval( $post_space_between ) . ',
                            		slidesPerGroup: ' . $slidesPerGroup . ',
                            		slidesPerGroupSkip: ' . $slidesPerGroupSkip . ',
		                        },
		                        768: {
		                          	slidesPerView: ' . $post_per_view_ipad . ',
		                          	spaceBetween: ' . intval( $post_space_between_ipad ) . ',
		                          	slidesPerGroup: ' . $slidesPerGroupIpad . ',
                            		slidesPerGroupSkip: ' . $slidesPerGroupSkipIpad . ',
		                        },
		                        0: {
		                          	slidesPerView: ' . $post_per_view_mobile . ',
		                          	spaceBetween: ' . intval( $post_space_between_mobile ) . ',
		                          	slidesPerGroup: ' . $slidesPerGroupMobile . ',
                            		slidesPerGroupSkip: ' . $slidesPerGroupSkipMobile . ',
		                        }
		                    },
                    });';

        if ( 'on' === $pause_on_hover && 'on' === $autoplay ) {
			$script .= '$(".' . esc_attr( $order_class ) . ' .swiper-container").on("mouseenter", function(e) {
							if ( typeof ' . esc_attr( $order_class ) . '_swiper.autoplay.stop === "function" ) {
								' . esc_attr( $order_class ) . '_swiper.autoplay.stop();
							}
                        });';
            $script .= '$(".' . esc_attr( $order_class ) . ' .swiper-container").on("mouseleave", function(e) {
        					if ( typeof ' . esc_attr( $order_class ) . '_swiper.autoplay.start === "function" ) {
                            	' . esc_attr( $order_class ) . '_swiper.autoplay.start();
                            }
                        });';
		}

		if ( 'true' !== $loop ) {
			$script .=  esc_attr( $order_class ) . '_swiper.on(\'reachEnd\', function(){
                            ' . esc_attr( $order_class ) . '_swiper.autoplay = false;
                        });';
		}

		$script .= '});</script>';

		return $script;
	}
}
$plugin_options = get_option( ELICUS_DIVI_PLUS_OPTION );
if ( isset( $plugin_options['dipl-modules'] ) ) {
	$modules = explode( ',', $plugin_options['dipl-modules'] );
	if ( in_array( 'dipl_team_slider', $modules ) ) {
		new DIPL_TeamSlider();
	}
} else {
	new DIPL_TeamSlider();
}