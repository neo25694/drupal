<?php

namespace Drupal\train_neo_2\Form;

use Drupal\Core\Form\ConfigFormBase;
use Drupal\Core\Form\FormStateInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;

/**
 * Class DefaultConfigForm.
 */
class DefaultConfigForm extends ConfigFormBase {

  /**
   * Drupal\Core\Database\Driver\mysql\Connection definition.
   *
   * @var \Drupal\Core\Database\Driver\mysql\Connection
   */
  protected $database;

  /**
   * {@inheritdoc}
   */
  public static function create(ContainerInterface $container) {
    $instance = parent::create($container);
    $instance->database = $container->get('database');
    return $instance;
  }

  /**
   * {@inheritdoc}
   */
  protected function getEditableConfigNames() {
    return [
      'train_neo_2.defaultconfig',
    ];
  }

  /**
   * {@inheritdoc}
   */
  public function getFormId() {
    return 'default_config_form';
  }

  /**
   * {@inheritdoc}
   */
  public function buildForm(array $form, FormStateInterface $form_state) {
    $config = $this->config('train_neo_2.defaultconfig');
    $form['key'] = [
      '#type' => 'textfield',
      '#title' => $this->t('key'),
      '#maxlength' => 64,
      '#size' => 64,
      '#default_value' => $config->get('key'),
    ];
    $form['api_secret_key'] = [
      '#type' => 'textarea',
      '#title' => $this->t('api secret key'),
      '#default_value' => $config->get('api_secret_key'),
    ];
    return parent::buildForm($form, $form_state);
  }

  /**
   * {@inheritdoc}
   */
  public function submitForm(array &$form, FormStateInterface $form_state) {
    parent::submitForm($form, $form_state);

    $this->config('train_neo_2.defaultconfig')
      ->set('key', $form_state->getValue('key'))
      ->set('api_secret_key', $form_state->getValue('api_secret_key'))
      ->save();
  }

}
