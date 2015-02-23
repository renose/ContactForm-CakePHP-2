<div class="row">
    <div class="col-lg-6">
        <div class="box">
            <div class="box-header with-border">
                <h3 class="box-title">Kontaktformular</h3>
            </div>

            <div class="box-body">
                <?php
                echo $this->Form->create('Contactform.Contactform', array(
                    'inputDefaults' => array(
                        'error' => array('attributes' => array('wrap' => 'span', 'class' => 'help-block'), 'div' => array('class' => 'has-error')),
                        'class' => 'form-control',
                        'label' => 'control-label',
                        'div' => array('class' => 'form-group'),
                    ),
                    'class' => 'form',
                    'role' => 'form'
                ));

                echo $this->Form->input('Contactform.Name', array('label' => __d('contactform', 'name')));
                echo $this->Form->input('Contactform.Mail', array('label' => __d('contactform', 'email')));
                echo $this->Form->input('Contactform.Message', array('type' => 'textarea', 'label' => __d('contactform', 'message')));
                echo $this->Form->label('Contactform.Spamprotection', __d('contactform', 'spam protection').' - '.$calculation);
                echo $this->Form->input('Contactform.Spamprotection', array('label' => false, 'autocomplete' => 'off'));
                ?>
            </div>

            <div class="box-footer">
                <?php
                echo $this->Form->submit('Absenden', array('label' => __d('contactform', 'submit'), 'class' => 'btn btn-primary'));

                echo $this->Form->end();
                ?>
            </div>
        </div>
    </div>
</div>
