<?php


namespace Drupal\ckeditor_tabber\Plugin\CKEditorPlugin;

use Drupal\ckeditor\CKEditorPluginBase;
use Drupal\editor\Entity\Editor;

/**
 * Defines the "CKEditorTabber" plugin.
 *
 * @CKEditorPlugin (
 *   id = "tabber",
 *   label = @Translation("CKEditorTabber"),
 *   module = "ckeditor_tabber"
 * )
 */
class CKEditorTabber extends CKEditorPluginBase {
  /**
   * {@inheritdoc}
   */
  public function getConfig(Editor $editor) {
    $config = [];
    return $config;
  }

  /**
   * {@inheritdoc}
   */
  public function getDependencies(Editor $editor) {
    return [];
  }

  /**
   * {@inheritdoc}
   */
  public function getFile() {
    return \Drupal::service('extension.list.module')->getPath('ckeditor_tabber') . '/js/plugins/tabber/plugin.js';
  }

  /**
   * {@inheritdoc}
   */
  public function getButtons() {
    $path = \Drupal::service('extension.list.module')->getPath('ckeditor_tabber') . '/js/plugins/tabber/icons';
    return [
      'Tabber' => [
        'label' => t('Add Tab'),
        'image' => $path . '/tabber.png',
      ],
    ];
  }
}
