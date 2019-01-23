<div class="row mt-4 mb-4">
    <div class="col">

       
            <div class="form-group row">
            {{ html()->label(__('validation.attributes.backend.addresses.id'))->class('col-md-2 form-control-label')->for('id') }}
            <div class="col-md-10">
       

                {{ $address->id }}

            </div><!--col-->
         </div><!--form-group-->
         
            <div class="form-group row">
            {{ html()->label(__('validation.attributes.backend.addresses.build_num'))->class('col-md-2 form-control-label')->for('build_num') }}
            <div class="col-md-10">
       

                {{ $address->build_num }}

            </div><!--col-->
         </div><!--form-group-->
         
            <div class="form-group row">
            {{ html()->label(__('validation.attributes.backend.addresses.street'))->class('col-md-2 form-control-label')->for('street') }}
            <div class="col-md-10">
       

                {{ $address->street }}

            </div><!--col-->
         </div><!--form-group-->
         
            <div class="form-group row">
            {{ html()->label(__('validation.attributes.backend.addresses.area'))->class('col-md-2 form-control-label')->for('area') }}
            <div class="col-md-10">
       

                {{ $address->area }}

            </div><!--col-->
         </div><!--form-group-->
         
            <div class="form-group row">
            {{ html()->label(__('validation.attributes.backend.addresses.city'))->class('col-md-2 form-control-label')->for('city') }}
            <div class="col-md-10">
       

                {{ $address->city }}

            </div><!--col-->
         </div><!--form-group-->
         
            <div class="form-group row">
            {{ html()->label(__('validation.attributes.backend.addresses.zipcode'))->class('col-md-2 form-control-label')->for('zipcode') }}
            <div class="col-md-10">
       

                {{ $address->zipcode }}

            </div><!--col-->
         </div><!--form-group-->
         
            <div class="form-group row">
            {{ html()->label(__('validation.attributes.backend.addresses.country'))->class('col-md-2 form-control-label')->for('country') }}
            <div class="col-md-10">
       

                {{ $address->country }}

            </div><!--col-->
         </div><!--form-group-->
         
            <div class="form-group row">
            {{ html()->label(__('validation.attributes.backend.addresses.details'))->class('col-md-2 form-control-label')->for('details') }}
            <div class="col-md-10">
       

                {{ $address->details }}

            </div><!--col-->
         </div><!--form-group-->
         

        <!--end-columns-->
      
        <div class="form-group row">
           {{html()->label(__('Customers'))->class('col-md-2 form-control-label')->for('customers') }}
            <div class="col-md-10">
                @if  ( isset($address->customers)&&$address->customers->count())
                    @foreach($address->customers as $temp)
                        {{$temp->name }},
                    @endforeach
                @endif
            </div><!--col-->
        </div><!--form-group-->
        


    </div><!--col-->
</div><!--row-->