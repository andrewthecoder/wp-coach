<?php

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) exit;

class WP_Coach_API_Sections {

  public function __construct() {
    add_action( 'wp_ajax_wp_coach_api_sections_index',   array( $this, 'index' ) );
    add_action( 'wp_ajax_wp_coach_api_sections_new',     array( $this, 'new_section') );
    add_action( 'wp_ajax_wp_coach_api_sections_create',  array( $this, 'create' ) );
    add_action( 'wp_ajax_wp_coach_api_sections_show',    array( $this, 'show' ) );
    add_action( 'wp_ajax_wp_coach_api_sections_edit',    array( $this, 'edit' ) );
    add_action( 'wp_ajax_wp_coach_api_sections_update',  array( $this, 'update' ) );
    add_action( 'wp_ajax_wp_coach_api_sections_destroy', array( $this, 'destroy' ) );
  }


  private function _before() {
    return;
  }


  public function index() {
    $course_id = intval( $_GET['course_id'] );

    if ( ! current_user_can('read_wp_coach_course', $course_id ) ) {
      die('Not allowed');
    }

    $sections = get_posts( array(
      'posts_per_page' => -1,
      'post_type'  => 'wp_coach_section',
      'perm'       => 'readable',
      'meta_query' => array(
        array(
          'key'     => '_wp_coach_course_id',
          'value'   => $course_id,
          'compare' => '=',
        ),
      ),
    ) );

    echo json_encode( $sections );
    die;
  }


  public function new_section() {
    return;
  }


  public function create() {
    return;
  }


  public function show() {
    return;
  }


  public function edit() {
    return;
  }


  public function update() {
    return;
  }


  public function destroy() {
    return;
  }


  private function _after() {
    return;
  }
}