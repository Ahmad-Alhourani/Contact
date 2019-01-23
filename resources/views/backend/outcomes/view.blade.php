<div class="row mt-4 mb-4">
    <div class="col">

       
            <div class="form-group row">
            {{ html()->label(__('validation.attributes.backend.outcomes.id'))->class('col-md-2 form-control-label')->for('id') }}
            <div class="col-md-10">
       

                {{ $outcome->id }}

            </div><!--col-->
         </div><!--form-group-->
         
            <div class="form-group row">
            {{ html()->label(__('validation.attributes.backend.outcomes.code'))->class('col-md-2 form-control-label')->for('code') }}
            <div class="col-md-10">
       

                {{ $outcome->code }}

            </div><!--col-->
         </div><!--form-group-->
         
            <div class="form-group row">
            {{ html()->label(__('validation.attributes.backend.outcomes.description'))->class('col-md-2 form-control-label')->for('description') }}
            <div class="col-md-10">
       

                {{ $outcome->description }}

            </div><!--col-->
         </div><!--form-group-->
         

        <!--end-columns-->
      


    </div><!--col-->
</div><!--row-->