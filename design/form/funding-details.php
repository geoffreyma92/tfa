<h2>Funding details</h2>
<div class="form-group col-xs-12">
	<h3>Other Available Travel Funding</h3>
</div>
<!-- Multiple Checkboxes -->
<div class="form-group col-xs-12">
    <label for="other_available_funding">Other available travel funding</label>
    <div class="checkbox">
        <label for="other_available_funding-0">
            <input name="other_available_funding" id="other_available_funding-0" value="research_grant" type="checkbox">I have a research grant
        </label>
    </div>
    <div class="checkbox">
        <label for="other_available_funding-1">
            <input name="other_available_funding" id="other_available_funding-1" value="research_student" type="checkbox">I am a research student
        </label>
    </div>
</div>

<!-- Multiple Radios -->
<div class="form-group col-xs-12">
    <label for="rs">Are you or your supervisor a part of a Research Strength</label>
    <div class="radio">
        <label for="rs-0">
            <input name="rs" id="rs-0" class="rs" value="1" type="radio">Yes
        </label>
    </div>
    <div class="radio">
        <label for="rs-1">
            <input name="rs" id="rs-1" class="rs" value="0" type="radio">No
        </label>
    </div>
</div>

<!-- Text input-->
<div class="form-group col-xs-6 research-strength">
    <label for="research_area">Research Strength:</label>
    <input id="research_area" name="research_area" class="form-control input-sm" type="text"/>
</div>

<!-- Multiple Radios -->
<div class="form-group col-xs-6 research-strength">
    <label for="travel_support">Travel support is available to its members</label>
    <div class="radio">
        <label for="travel_support-0">
            <input name="travel_support" id="travel_support-0" value="1" type="radio">Yes
        </label>
    </div>
    <div class="radio">
        <label for="travel_support-1">
            <input name="travel_support" id="travel_support-1" value="0" type="radio">No
        </label>
    </div>
</div>

<!-- Multiple Radios -->
<div class="form-group col-xs-6">
    <label for="stage">Stage</label>
    <div class="radio">
        <label for="stage-0">
            <input name="stage" id="stage-0" value="1" checked="checked" type="radio">Stage 1 (pre DA)
        </label>
    </div>
    <div class="radio">
        <label for="stage-1">
            <input name="stage" id="stage-1" value="2" type="radio">Stage 2 (post DA)
        </label>
    </div>
    <div class="radio">
        <label for="stage-2">
            <input name="stage" id="stage-2" value="3" type="radio">Stage 3 (Final/writing up)
        </label>
    </div>
</div>

<!-- Multiple Radios -->
<div class="form-group col-xs-6">
    <label for="supervisor_grant">Budget has been granted by supervisor</label>
    <div class="radio">
        <label for="supervisor_grant-0">
            <input name="supervisor_grant" id="supervisor_grant-0" value="1" type="radio">Yes
        </label>
    </div>
    <div class="radio">
        <label for="supervisor_grant-1">
            <input name="supervisor_grant" id="supervisor_grant-1" value="0" type="radio">No
        </label>
    </div>
</div>
<div class="col-xs-12"></div>
<!-- Multiple Radios -->
<div class="form-group col-sm-12 col-xs-12 vc_fund_div">
    <label for="vc_fund">Applied for VC's conference fund?</label>
    <div class="radio">
        <label for="vc_fund-0">
            <input name="vc_fund" id="vc_fund-0" class="vc_fund" value="1" checked="checked" type="radio">Yes
        </label>
    </div>
    <div class="radio">
        <label for="vc_fund-1">
            <input name="vc_fund" id="vc_fund-1" class="vc_fund" value="0" type="radio">No
        </label>
    </div>
</div>

<!-- Prepended text-->
<div class="form-group col-sm-6 col-xs-12 vc_grant_amount">
    <label for="requested_amount">Amount granted</label>
    <div class="input-group">
        <span class="input-group-addon">$</span>
        <input id="requested_amount" name="requested_amount" class="form-control" type="text" value="0">
    </div>
</div>

<div class="col-xs-12"></div>
<div class="form-group col-xs-12">
	<h3>Funding Requested</h3>
</div>

<!-- Text input-->
<div class="form-group col-sm-3 col-xs-12">
    <label for="air_fare">Air fare</label>
    <div class="input-group">
	 <div class="input-group-addon">$</div>
	  	<input class="form-control input-sm" id="air_fare" name="air_fare" type="text" value="0">
	</div>
</div>

<!-- Text input-->
<div class="form-group col-sm-3 col-xs-12">
    <label for="accommodation">Accommodation</label>
    <div class="input-group">
    <div class="input-group-addon">$</div>
	  	<input id="accommodation" name="accommodation" class="form-control input-sm" type="text" value="0">
	</div>
</div>

<!-- Text input-->
<div class="form-group col-sm-3 col-xs-12">
    <label for="conference_fees">Conference fees</label>
    <div class="input-group">
    <div class="input-group-addon">$</div>
	  	<input id="conference_fees" name="conference_fees" class="form-control input-sm" type="text" value="0">
	</div>
</div>

<!-- Text input-->
<div class="form-group col-sm-3 col-xs-12">
    <label for="meals">Meals</label>
    <div class="input-group">
    <div class="input-group-addon">$</div>
	  	<input id="meals" name="meals" class="form-control input-sm" type="text" value="0">
	</div>
</div>

<!-- Text input-->
<div class="form-group col-sm-3 col-xs-12">
    <label for="local_fares">Local fares</label>
    <div class="input-group">
    <div class="input-group-addon">$</div>
	  	<input id="local_fares" name="local_fares" class="form-control input-sm" type="text" value="0">
	</div>
</div>

<!-- Text input-->
<div class="form-group col-sm-3 col-xs-12">
    <label for="car_mileage">Car mileage</label>
    <div class="input-group">
    <div class="input-group-addon">$</div>
	  	<input id="car_mileage" name="car_mileage" class="form-control input-sm" type="text" value="0">
	</div>
</div>

<div class="form-group col-sm-3 col-xs-12">
    <label for="other_expenses">Other</label>
    <div class="input-group">
    <div class="input-group-addon">$</div>
	  	<input id="other_expenses" name="other_expenses" class="form-control input-sm" type="text" value="0">
	</div>
</div>

<!-- Text input-->
<!-- <div class="form-group col-xs-12">
    <label for="total_expenses">Total expenses</label>
    <div class="input-group"> 
    <div class="input-group-addon">$</div>
	  	<input id="other_expenses" name="other_expenses" class="form-control input-sm" type="text" value="0">
	</div>
</div> -->

<div class="form-group col-xs-12 col-xs-6">
    <button type="button" class="btn btn-primary" href="#personal-details" data-toggle="tab" id="funding-back"><span class="glyphicon glyphicon-chevron-left"></span> Back</button>
</div>

<div class="form-group col-xs-12 col-xs-6">
    <button type="button" class="btn btn-primary pull-right" type="submit">Submit</button>
</div>