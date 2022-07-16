<?php

namespace App\View\Components;

use Illuminate\View\Component;

class FormGroup extends Component {
  public $label, $type, $id, $placeholder, $required;

  /**
   * Create a new component instance.
   *
   * @return void
   */
  public function __construct($label, $type, $id, $placeholder = null, $required = null) {
    $this->label = $label;
    $this->type = $type;
    $this->id = $id;
    $this->placeholder = $placeholder;
    $this->required = isset($required);
  }

  /**
   * Get the view / contents that represent the component.
   *
   * @return \Illuminate\Contracts\View\View|\Closure|string
   */
  public function render() {
    return view('components.form-group');
  }
}
