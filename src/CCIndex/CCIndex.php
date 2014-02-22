<?php
/**
* Standard controller layout.
*
* @package OlgaCore
*/
class CCIndex implements IController {

   /**
    * Implementing interface IController. All controllers must have an index action.
    */
   public function Index() {   
      global $ol;
      $ol->data['title'] = "The Index Controller";
      $ol->data['main'] = "<h1>The Index Controller</h1>";
   }

} 
