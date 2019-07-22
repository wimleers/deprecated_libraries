<?php

namespace Drupal\deprecated_libraries\Controller;

use Drupal\Core\StringTranslation\StringTranslationTrait;
use Drupal\examples\Utility\DescriptionTemplateTrait;

/**
 * Controller for example description page.
 *
 * This class uses the DescriptionTemplateTrait to display text we put in the
 * templates/description.html.twig file.
 */
class DeprecatedLibsController {

  use DescriptionTemplateTrait;
  use StringTranslationTrait;

  /**
   * {@inheritdoc}
   */
  protected function getModuleName() {
    return 'deprecated_libraries';
  }


  /*
   * Core jQueryUI Accordion asset library.
   *
   * @return array
   *   A renderable array.
   */
  public function getCoreJqueryUIAccordion() {
    $build['element'] = [
      '#theme' => 'core_jquery_ui_accordion',
      '#title' => 'core/jquery.ui.accordion',
    ];

    $build['element']['#attached']['library'][] = 'deprecated_libraries/core.jquery_ui_accordion';

    return $build;
  }

  /*
   * Contrib jQueryUI Accordion asset library.
   *
   * @return array
   *   A renderable array.
   */
  public function getContribJqueryUIAccordion() {
    $build['element'] = [
      '#theme' => 'contrib_jquery_ui_accordion',
      '#title' => 'jquery_ui_accordion/accordion',
    ];

    $build['element']['#attached']['library'][] = 'deprecated_libraries/contrib.jquery_ui_accordion';

    return $build;
  }

  /*
   * Core jQueryUI Checkboxradio asset library.
   *
   * @return array
   *   A renderable array.
   */
  public function getCoreJqueryUICheckboxradio() {
    $build['element'] = [
      '#theme' => 'core_jquery_ui_checkboxradio',
      '#title' => 'core/jquery.ui.checkboxradio',
    ];

    $build['element']['#attached']['library'][] = 'deprecated_libraries/core.jquery_ui_checkboxradio';

    return $build;
  }

  /*
   * Contrib jQueryUI Checkboxradio asset library.
   *
   * @return array
   *   A renderable array.
   */
  public function getContribJqueryUICheckboxradio() {
    $build['element'] = [
      '#theme' => 'contrib_jquery_ui_checkboxradio',
      '#title' => 'jquery_ui_checkboxradio/checkboxradio',
    ];

    $build['element']['#attached']['library'][] = 'deprecated_libraries/contrib.jquery_ui_checkboxradio';

    return $build;
  }

}
