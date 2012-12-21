<?php defined('SYSPATH') or die('No direct script access.');

class Model_REST_Todo extends ORM implements REST_Method_Get, REST_Method_Put, REST_Method_Post, REST_Method_Delete
 {

  /**
   *
   * @param Rest $rest
   */
  public function rest_get(Rest $rest)
  {
    $data = array();
    
    $id = $rest->param('id');
    if ( ! empty($id))
    {
      if ( ! isset($data[$id]))
      {
        throw new Http_Exception_404('Resource not found, ID: :id', array(':id' => $id));
      }

      $todos = ORM::factory('rest_todo')->find($id)->as_array();
      foreach ($todos as $key => $value)
      {
         $data[$key] = $value->as_array();
      }

      return $data;
    }
    else
    {
      $todos = ORM::factory('rest_todo')->find_all()->as_array();
      foreach ($todos as $key => $value)
      {
         $data[$key] = $value->as_array();
      }

      return $data;
    }
  }

  /**
   *
   * @param Rest $rest
   */
  public function rest_put(Rest $rest)
  {
    $data = array();
    $id = $rest->param('id');
    $todo = ORM::factory('rest_todo')->find($id);

    if ( ! empty($todo))
    {

      $input = $rest->body('json', TRUE);
      $updatedtodo = new Model_REST_Todo($id);
      $updatedtodo->values($input);
      $updatedtodo->save();

      return $input;
    }
    else
    {
      // TODO
      $rest->send_code(403); //Forbidden
    }
  }

  /**
   *
   * @param Rest $rest
   */
  public function rest_post(Rest $rest)
  {
  
    $data = array();
    $todo = ORM::factory('rest_todo')->find_all()->as_array();
    foreach ($todo as $key => $value)
    {
       $data[$key] = $value->as_array();
    }

    $post = $rest->post();
    if (empty($post))
    {
      $post = $rest->body('json', TRUE);
    }

    $newtodo = new Model_REST_Todo();
    $newtodo->values($post);
    $newtodo->save();

    $rest->send_created(count($data)+1);
  }

  /**
   *
   * @param Rest $rest
   */
  public function rest_delete(Rest $rest)
  {
    $id = $rest->param('id');
    
    $todo = new Model_REST_Todo($id);
    $todo->delete();

    $rest->send_code(204);
  }

}