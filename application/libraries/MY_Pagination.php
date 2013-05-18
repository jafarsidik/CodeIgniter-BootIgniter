<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * CI Pagination for twitter bootstrap. 
 */
class MY_Pagination extends CI_Pagination {
/**
 * Calls the CI_Pagination::construct. Fill the params array as normal
 * for overwritting values set for twitter bootstrap in this
 * class.
 * 
 * @param array $params             see CI_PAGINATION::__construct($params)
 * @param string $pagination_size   mini, small, medium or large
 * @param string $alignment           left, center or right
 */
    public function reconstruct($params_override = array() 
                              , $pagination_size = 'medium'
                              , $alignment = 'left')  {
      $params['full_tag_open'] = '<div class="pagination';
      $params['full_tag_open'] .= ($pagination_size == 'medium') 
                                      ? ''
                                            :
                                        " pagination-$pagination_size";
      if($alignment !== 'left') {
        $this['full_tag_open'] .= " pagination-$alignment";
      }
      $params['full_tag_open'] .= '">';
      $params['full_tag_open'] .= '<ul>';
      $params['full_tag_close'] = '</ul></div>';
      $params['prev_tag_open'] = '<li>';
      $params['prev_tag_close'] = '</li>';
      $params['next_tag_open'] = '<li>';
      $params['next_tag_close'] = '</li>';
      $params['cur_tag_open'] = '<li class="active"><a href="#">';
      $params['cur_tag_close'] = '</a><li>';
      $params['num_tag_open'] = '<li>';
      $params['num_tag_close'] = '</li>';
      parent::__construct(array_replace($params, $params_override));
  }
  
    public function __construct() {
      $params = array();
      $params['full_tag_open'] = '<div class="pagination"><ul>';
      $params['full_tag_open'] .= '<ul>';
      $params['full_tag_close'] = '</ul></div>';
      $params['prev_tag_open'] = '<li>';
      $params['prev_tag_close'] = '</li>';
      $params['next_tag_open'] = '<li>';
      $params['next_tag_close'] = '</li>';
      $params['cur_tag_open'] = '<li class="active"><a href="#">';
      $params['cur_tag_close'] = '</a><li>';
      $params['num_tag_open'] = '<li>';
      $params['num_tag_close'] = '</li>';
      parent::__construct($params);
    }
}