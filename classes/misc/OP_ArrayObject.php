<?php
/**
 *  Opening Hours: Misc: Collection
 */

if ( class_exists( 'OP_ArrayObject' ) )
  return;

class OP_ArrayObject extends ArrayObject {

  /**
   *  Add Element
   *
   *  @access     public
   *  @param      mixed     $element
   *  @return     OP_ArrayObject
   */
  public function addElement ( $element ) {
    $this->append( $element );
  }

  /**
   *  Remove Element
   *
   *  @access     public
   *  @param      mixed     $element
   *  @return     OP_ArrayObject
   */
  public function removeElement ( $element ) {
    foreach ( $this as $id => $walkerElement ) :
      if ( $element === $walkerElement ) :
        $this->offsetUnset( $id );
    endforeach;
  }

  /**
   *  Remove Element By Id
   *
   *  @access     public
   *  @param      string|int  $id
   *  @return     OP_ArrayObject
   */
  public function removeElementById ( $id ) {
    if ( $this->offsetExists( $id ) )
      $this->offsetUnset( $id );

    return $this;
  }

}
?>
