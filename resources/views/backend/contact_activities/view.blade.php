<div class="row mt-4 mb-4">
    <div class="col">

       
            <div class="form-group row">
            {{ html()->label(__('validation.attributes.backend.contact_activities.id'))->class('col-md-2 form-control-label')->for('id') }}
            <div class="col-md-10">
       

                {{ $contact_activity->id }}

            </div><!--col-->
         </div><!--form-group-->
         
            <div class="form-group row">
            {{ html()->label(__('validation.attributes.backend.contact_activities.contact_id'))->class('col-md-2 form-control-label')->for('contact_id') }}
            <div class="col-md-10">
       
           {{ $contact_activity->contact? $contact_activity->contact->name : 'N/A' }}

        </div><!--col-->
         </div><!--form-group-->
         
            <div class="form-group row">
            {{ html()->label(__('validation.attributes.backend.contact_activities.type_id'))->class('col-md-2 form-control-label')->for('type_id') }}
            <div class="col-md-10">
       
           {{ $contact_activity->type? $contact_activity->type->code : 'N/A' }}

        </div><!--col-->
         </div><!--form-group-->
         
            <div class="form-group row">
            {{ html()->label(__('validation.attributes.backend.contact_activities.outcome_id'))->class('col-md-2 form-control-label')->for('outcome_id') }}
            <div class="col-md-10">
       
           {{ $contact_activity->outcome? $contact_activity->outcome->code : 'N/A' }}

        </div><!--col-->
         </div><!--form-group-->
         
            <div class="form-group row">
            {{ html()->label(__('validation.attributes.backend.contact_activities.activity_date'))->class('col-md-2 form-control-label')->for('activity_date') }}
            <div class="col-md-10">
       

                {{ $contact_activity->activity_date }}

            </div><!--col-->
         </div><!--form-group-->
         
            <div class="form-group row">
            {{ html()->label(__('validation.attributes.backend.contact_activities.details'))->class('col-md-2 form-control-label')->for('details') }}
            <div class="col-md-10">
       

                {{ $contact_activity->details }}

            </div><!--col-->
         </div><!--form-group-->
         

        <!--end-columns-->
      


    </div><!--col-->
</div><!--row-->