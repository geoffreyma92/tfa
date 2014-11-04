<h2>Travel details</h2>
<!-- Multiple Radios -->
<div class="form-group col-xs-12">
  <label>Type of paper</label>
  <div class="radio">
    <label class="radio-inline" for="travel-details-0">
      <input name="travel-details" id="travel-details-0" value="conference" type="radio">Conference paper
    </label>
  </div>
  <div class="radio">
    <label class="radio-inline" for="travel-details-1">
      <input name="travel-details" id="travel-details-1" value="journal" type="radio">Journal paper
    </label>
  </div>
</div>

<!-- Text input-->
<div class="form-group col-sm-6 col-xs-12">
  <label for="conference_name">Conference name</label>
  <input id="conference_name" name="conference_name" placeholder="" class="form-control input-sm" type="text">
</div>

<!-- Text input-->
<div class="form-group col-sm-6 col-xs-12">
  <label for="conference_url">Conference URL</label>
  <input id="conference_url" name="conference_url" placeholder="" class="form-control input-sm" type="text">
</div>

<!-- Textarea -->
<div class="form-group col-xs-12">
  <label for="conference_details">Conference details</label>
  <textarea class="form-control" id="conference_details" rows="5" name="conference_details"></textarea>
</div>

<!-- Text input-->
<div class="form-group col-sm-3 col-xs-6">
  <label for="start_date">Start date</label>
    <input id="start_date" name="start_date" class="form-control input-sm" type="date">
</div>

<!-- Text input-->
<div class="form-group col-sm-3 col-xs-6">
  <label for="end_date">End date</label>
  <input id="end_date" name="end_date" class="form-control input-sm" type="date">
</div>

<!-- Text input-->
<div class="form-group col-sm-3 col-xs-6">
  <label for="travel_date">Travel date</label>
  <input id="travel_date" name="travel_date" class="form-control input-sm" type="date">
</div>

<!-- Text input-->
<div class="form-group col-sm-3 col-xs-6">
  <label for="end_travel_date">End travel date</label>
  <input id="end_travel_date" name="end_travel_date" class="form-control input-sm" type="date">
</div>

<!-- Text input-->
<div class="form-group col-sm-4 col-xs-12">
  <label for="conference_country">Country</label>
  <input id="conference_country" name="conference_country" placeholder="" class="form-control input-sm" type="text">
</div>

<!-- Text input-->
<div class="form-group col-sm-4 col-xs-12">
  <label for="conference_region">Region</label>
  <input id="conference_region" name="conference_region" placeholder="" class="form-control input-sm" type="text">
</div>

<!-- Text input-->
<div class="form-group col-sm-4 col-xs-12">
  <label for="conference_city">City</label>
  <input id="conference_city" name="conference_city" placeholder="" class="form-control input-sm" type="text">
</div>

<!-- Multiple Radios -->
<div class="form-group col-xs-12" id="conference_quality_div">
  <label for="conference_quality">Conference quality</label>
  <div class="radio">
    <label for="conference_quality-0">
      <input name="conference_quality" class="conf_quality" id="conference_quality-0" value="a" type="radio">A
    </label>
  </div>
  <div class="radio">
    <label for="conference_quality-1">
      <input name="conference_quality" class="conf_quality" id="conference_quality-1" value="b" type="radio">B
    </label>
  </div>
  <div class="radio">
    <label for="conference_quality-2">
      <input name="conference_quality" class="conf_quality" id="conference_quality-2" value="other" type="radio">Other
    </label>
  </div>
</div>

<div class="form-group col-xs-6" id="other_conf">
  <label for="other_conf_quality">Other</label>
  <input id="other_conf_quality" name="other_conf_quality" class="form-control input-sm" type="text">
</div>

<!-- Textarea -->
<div class="form-group col-xs-12">
  <label for="quality_comment">Quality and importance of publication</label>
  <textarea class="form-control" id="quality_comment" rows="5" name="quality_comment" placeholder="Comment on quality and importance of publication"></textarea>
</div>

<!-- Text input-->
<div class="form-group col-xs-12">
  <label for="paper_title">Title of paper</label>
  <input id="paper_title" name="paper_title" placeholder="" class="form-control input-sm" type="text">
</div>

<!-- Multiple Checkboxes -->
<div class="form-group col-xs-12">
  <label for="attached">Paper/Poster attached?</label>
  <div class="checkbox">
    <label for="attached-0">
      <input name="attached" id="attached-0" value="yes" type="checkbox">Yes
    </label>
  </div>
  <div class="checkbox">
    <label for="attached-1">
      <input name="attached" id="attached-1" value="no" type="checkbox">No, acceptance is pending
    </label>
  </div>
  <div class="checkbox">
    <label for="attached-2">
      <input name="attached" id="attached-2" value="email" type="checkbox">Email confirmation attached
    </label>
  </div>
  <div class="checkbox">
    <label for="attached-3">
      <input name="attached" id="attached-3" value="peer_reviews" type="checkbox">Peer reviews attached
    </label>
  </div>
  <div class="checkbox">
    <label for="attached-4">
      <input name="attached" id="attached-4" value="copy_of_papers" type="checkbox">Copy of paper attached
    </label>
  </div>
</div>

<!-- Multiple Radios -->
<div class="form-group col-xs-12">
  <label for="herdc">HERDC points</label>
  <div class="radio">
    <label for="herdc-0">
      <input name="herdc" id="herdc-0" value="yes" type="radio">Yes, the paper attracts HERDC points (Peer reviews on the full paper have already taken place and paper will be associated with an ISBN)
    </label>
  </div>
  <div class="radio">
    <label for="herdc-1">
      <input name="herdc" id="herdc-1" value="no-points" type="radio">No, the paper does not attract HERDC points.
    </label>
  </div>
  <div class="radio">
    <label for="herdc-2">
      <input name="herdc" id="herdc-2" value="no" type="radio">No
    </label>
  </div>
</div>

<!-- Textarea -->
<div class="form-group col-xs-12">
  <label for="travel_justification">Justification for Travel</label>
  <textarea class="form-control" id="travel_justification" name="travel_justification" rows="5" placeholder="Why is this conference appropriate?"></textarea>
</div>

<!-- Multiple Radios -->
<div class="form-group col-xs-12">
  <label for="special_duties">Special conference duties</label>
  <div class="radio">
    <label for="special_duties-0">
      <input name="special_duties" id="special_duties-0" class="special_duties" value="0" type="radio">Special invitation to conference received
    </label>
  </div>
  <div class="radio">
    <label for="special_duties-1">
      <input name="special_duties" id="special_duties-1" class="special_duties" value="1" type="radio">Will perform special duties significantly beyond of those presenting a paper. If so, please describe the nature of your invited contribution and attach evidence below
    </label>
  </div>
</div>

<!-- Textarea -->
<div class="form-group col-xs-12" id="contrib_text">
  <label for="invited_contribution">Nature of your invited contribution</label>
  <textarea class="form-control" id="invited contribution" name="invited contribution" rows="3" placeholder="Please describe the nature of your invited contribution"></textarea>
</div>

<!-- Multiple Radios -->
<div class="form-group col-sm-4 col-xs-12">
  <label for="pep">PEP Arrangements</label>
  <div class="radio">
    <label for="pep-0">
      <input name="pep" class="pep" id="pep-0" value="1" type="radio">Yes
    </label>
  </div>
  <div class="radio">
    <label for="pep-1">
      <input name="pep" class="pep" id="pep-1" value="0" type="radio">No
    </label>
  </div>
</div>

<!-- Text input-->
<div class="form-group col-sm-4 col-xs-6 pep-dates">
  <label for="pep_start_date">PEP start date</label>
    <input id="pep_" name="pep_" class="form-control input-sm" type="date">
</div>

<!-- Text input-->
<div class="form-group col-sm-4 col-xs-6 pep-dates">
  <label for="pep_end_date">PEP end date</label>
  <input id="pep_end_date" name="pep_end_date" class="form-control input-sm" type="date">
</div>

<!-- Appended Input-->
<div class="form-group col-xs-12">
  <label>Supporting documents</label>
  <div class="input-group form-group">
    <span class="input-group-btn">
      <span class="btn btn-default btn-file">
        Upload <span class="glyphicon glyphicon-upload"></span>
    <input type="file" id="takePictureField" name="file">
    </span>
    </span>
    <input type="text" class="form-control" readonly>
  </div>
  <p class="help-block">Please upload ZIP file</p>
</div>

<div class="form-group col-xs-6">
  <button type="button" class="btn btn-primary" href="#personal-details" data-toggle="tab" id="travel-back"><span class="glyphicon glyphicon-chevron-left"></span> Back</button>
</div>

<div class="form-group col-xs-6">
  <button type="button" class="btn btn-primary pull-right" href="#funding-details" data-toggle="tab" id="travel-next">Next <span class="glyphicon glyphicon-chevron-right"></span>
  </button>
</div>




