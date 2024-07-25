<?php

namespace Drupal\custom_ckeditor\Plugin\CKEditor5Plugin;

use Drupal\ckeditor5\CKEditor5PluginBase;
use Drupal\editor\Entity\Editor;

/**
 * Defines the "media_embed" plugin.
 *
 * @CKEditor5Plugin(
 *   id = "media_embed",
 *   label = @Translation("Media Embed")
 * )
 */
class MediaEmbed extends CKEditor5PluginBase {

  /**
   * {@inheritdoc}
   */
  public function getDependencies(Editor $editor) {
    return [];
  }

  /**
   * {@inheritdoc}
   */
  public function getLibraries(Editor $editor) {
    return [];
  }

  /**
   * {@inheritdoc}
   */
  public function getFile() {
    return 'libraries/ckeditor5/media-embed/plugin.js';
  }

  /**
   * {@inheritdoc}
   */
  public function getButtons() {
    return [
      'MediaEmbed' => [
        'label' => t('Media Embed'),
        'image' => 'libraries/ckeditor5/media-embed/icons/media-player.png',
      ],
    ];
  }

  /**
   * {@inheritdoc}
   */
  public function getConfig(Editor $editor) {
    return [];
  }
}
