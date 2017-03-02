<?php
/**
 * Created by PhpStorm.
 * User: nmacdougall
 * Date: 2017-03-02
 * Time: 2:46 PM
 */

namespace Drupal\d8_cards_nicole\Form;
use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;
use Drupal\Component\Utility\UrlHelper;

//use Drupal\Core\Form\ConfigFormBase;

class ContributeForm extends FormBase
{

    /**
     * {@inheritdoc}
     */
    public function getFormId()
    {
        return 'd8_cards_nicole_contribute_form';
    }

    /**
     * {@inheritdoc}
     */
    public function buildForm(array $form, FormStateInterface $form_state)
    {
        $form['title'] = array(
            '#type' => 'textfield',
            '#title' => t('Title'),
            '#required' => TRUE,
        );
        $form['video'] = array(
            '#type' => 'textfield',
            '#title' => t('Youtube video'),
        );
        $form['video'] = array(
            '#type' => 'textfield',
            '#title' => t('Youtube video'),
        );
        $form['develop'] = array(
            '#type' => 'checkbox',
            '#title' => t('I would like to be involved in developing this material'),
        );
        $form['description'] = array(
            '#type' => 'textarea',
            '#title' => t('Description'),
        );
        $form['contact'] = array(
            '#type' => 'select',
            '#title' => t('Contact'),
            '#options' => array(
                0 => t('No'),
                1 => t('Yes'),
            ),
            '#default_value' => 1,
            '#description' => t('Would you like to be contacted about your contribution?'),
        );
        $form['submit'] = array(
            '#type' => 'submit',
            '#value' => t('Submit'),
        );
        return $form;
    }

    public function validateForm(array &$form, FormStateInterface $form_state) {
        // Validate video URL.
        if (!UrlHelper::isValid($form_state->getValue('video'), TRUE)) {
            $form_state->setErrorByName('video', $this->t("The video url '%url' is invalid.", array('%url' => $form_state->getValue('video'))));
        }
    }

    /**
     * {@inheritdoc}
     */
    public function submitForm(array &$form, FormStateInterface $form_state)
    {
        // Display result.
        foreach ($form_state->getValues() as $key => $value) {
            drupal_set_message($key . ': ' . $value);
        }
    }
}