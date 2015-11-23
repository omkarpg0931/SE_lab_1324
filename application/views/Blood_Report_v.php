<?php // Change the css classes to suit your needs    
$this->load->helper('form');
$attributes = array('class' => '', 'id' => '');
echo form_open('Blood_Report_c', $attributes); ?>

<p>
        <label for="medical_center">Medical Center <span class="required">*</span></label>
        <?php echo form_error('medical_center'); ?>
        
        <?php // Change the values in this array to populate your dropdown as required ?>
        <?php $options = array(
                                                  'GMC'    => 'GMC',
                                                  'KLE'    => 'KLE',
                                                  'Manipal'=> 'Manipal',
                                                  'Luz Lab'=> 'Luz Lab',
                                          'Dr Lal PathLabs'=> 'Dr Lal PathLabs',
                                       'Grace Nursing Home'=> 'Grace Nursing Home',
                                          'Goa Scan Centre'=> 'Goa Scan Centre',
                             'Dr Solanki Ultrasound Centre'=> 'Dr Solanki Ultrasound Centre'
                                                ); ?>

        <br /><?php echo form_dropdown('medical_center', $options, set_value('medical_center'))?>
</p>                                             
                        
<p>
        <label for="report_date_time">Report Date/Time <span class="required">*</span></label>
        <?php echo form_error('report_date_time'); ?>
        <br /><input id="report_date_time" type="text" name="report_date_time" placeholder="YYYY-MM-DD" maxlength="20" value="<?php echo set_value('report_date_time'); ?>"  />
</p>

<p>
        <label for="status">Status <span class="required">*</span></label>
        <?php echo form_error('status'); ?>
        <br /><input id="status" type="text" name="status" maxlength="10" value="<?php echo set_value('status'); ?>"  />
</p>

<p>
        <label for="blood_group">Blood Group <span class="required">*</span></label>
        <?php echo form_error('blood_group'); ?>
        
        <?php // Change the values in this array to populate your dropdown as required ?>
        <?php $options = array(
                                                  'A +'    => 'A +',
                                                  'B +'    => 'B +',
                                                  'AB +'    => 'AB +',
                                                  'O +'    => 'O +',
                                                  'AB -'    => 'AB -',
                                                  'A -'    => 'A -',
                                                  'B -'    => 'B -',
                                                  'O -'    => 'O -',
                                                ); ?>

        <br /><?php echo form_dropdown('blood_group', $options, set_value('blood_group'))?>
</p>

<p>
        <label for="specimen">SPECIMEN: <span class="required">*</span></label>
        <?php echo form_error('specimen'); ?>
        <br /><input id="specimen" type="text" name="specimen" maxlength="15" value="<?php echo set_value('specimen'); ?>"  />
</p>

<p>
        <label for="wbc">White Blood Cell <span class="required">*</span></label>
        <?php echo form_error('wbc'); ?>
        <br /><input id="wbc" type="text" name="wbc" maxlength="6" value="<?php echo set_value('wbc'); ?>"  />
</p>

<p>
        <label for="rbc">Red Blood Cell <span class="required">*</span></label>
        <?php echo form_error('rbc'); ?>
        <br /><input id="rbc" type="text" name="rbc" maxlength="6" value="<?php echo set_value('rbc'); ?>"  />
</p>

<p>
        <label for="HB">Hemoglobin <span class="required">*</span></label>
        <?php echo form_error('HB'); ?>
        <br /><input id="HB" type="text" name="HB" maxlength="6" value="<?php echo set_value('HB'); ?>"  />
</p>

<p>
        <label for="HCT">Hematocrit <span class="required">*</span></label>
        <?php echo form_error('HCT'); ?>
        <br /><input id="HCT" type="text" name="HCT" maxlength="6" value="<?php echo set_value('HCT'); ?>"  />
</p>

<p>
        <label for="MCV">Mean Cell Volume <span class="required">*</span></label>
        <?php echo form_error('MCV'); ?>
        <br /><input id="MCV" type="text" name="MCV" maxlength="6" value="<?php echo set_value('MCV'); ?>"  />
</p>

<p>
        <label for="MCH">Mean Cell Hemoglobin <span class="required">*</span></label>
        <?php echo form_error('MCH'); ?>
        <br /><input id="MCH" type="text" name="MCH" maxlength="6" value="<?php echo set_value('MCH'); ?>"  />
</p>

<p>
        <label for="MCHC">Mean Cell Hb Conc <span class="required">*</span></label>
        <?php echo form_error('MCHC'); ?>
        <br /><input id="MCHC" type="text" name="MCHC" maxlength="6" value="<?php echo set_value('MCHC'); ?>"  />
</p>

<p>
        <label for="RDW">Red Cell Dist Width <span class="required">*</span></label>
        <?php echo form_error('RDW'); ?>
        <br /><input id="RDW" type="text" name="RDW" maxlength="6" value="<?php echo set_value('RDW'); ?>"  />
</p>

<p>
        <label for="platelet_count">Platelet count <span class="required">*</span></label>
        <?php echo form_error('platelet_count'); ?>
        <br /><input id="platelet_count" type="text" name="platelet_count" maxlength="6" value="<?php echo set_value('platelet_count'); ?>"  />
</p>

<p>
        <label for="mean_platelet_volume">Mean Platelet Volume <span class="required">*</span></label>
        <?php echo form_error('mean_platelet_volume'); ?>
        <br /><input id="mean_platelet_volume" type="text" name="mean_platelet_volume" maxlength="6" value="<?php echo set_value('mean_platelet_volume'); ?>"  />
</p>

                                             
                        

<p>
        <?php echo form_submit( 'submit', 'Submit'); ?>
</p>

<?php echo form_close(); ?>
