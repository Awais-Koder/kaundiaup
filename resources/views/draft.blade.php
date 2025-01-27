<form action="" method="post" enctype="multipart/form-data" class="uk-form bt-flabels js-flabels"
    data-parsley-validate="" data-parsley-errors-messages-disabled="" novalidate="">
    @csrf
    <div class="row" style="">
        <div class="col-md-8">
            <div class="input-group mt-5">
                <input type="search" name="search_data" class="form-control" id="search_data"
                    placeholder="Enter NID No./Birth Registration No./Passport No./Citizen ID in English">
                <input type="hidden" name="citizen_id">
                <span class="input-group-btn">
                    <button class="btn btn-primary" type="button" onclick="check_assessment_exist_data()">
                        <span class="spinner-grow spinner-grow-sm" role="status" aria-hidden="true"></span>
                        <span class="ion-ios-search" aria-hidden="true"></span>
                        <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;">Search
                            </font>
                        </font>
                    </button>
                </span>
            </div>
        </div>
    </div>

    <div class="text-danger">
        <font style="vertical-align: inherit;">
            <font style="vertical-align: inherit;">* Marked fields are mandatory.</font>
        </font>
    </div>

    <div class="row" style="margin-top: 50px;">
        <div class="col-md-12">
            <div class="row form-group">
                <label for="name_bn" class="col-sm-3 control-label">
                    <font style="vertical-align: inherit;">
                        <font style="vertical-align: inherit;">Name (in Bengali) </font>
                    </font><span class="text-danger">
                        <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;">*</font>
                        </font>
                    </span>
                </label>
                <div class="col-sm-3 bt-flabels__wrapper">
                    <input type="text" name="name_bn" id="name_bn" value="" class="form-control "
                        autocomplete="name_bn" autofocus="" placeholder="Full name" data-parsley-required="">
                    <span class="bt-flabels__error-desc">
                        <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;">Give the name in Bengali....</font>
                        </font>
                    </span>
                </div>

                <label for="mobile" class="col-sm-3 control-label">
                    <font style="vertical-align: inherit;">
                        <font style="vertical-align: inherit;">Mobile</font>
                    </font>
                </label>
                <div class="col-sm-3 bt-flabels__wrapper">
                    <input type="text" name="mobile" id="mobile" value="" class="form-control "
                        autocomplete="mobile" autofocus="" data-parsley-type="digits" data-parsley-minlength="11"
                        data-parsley-maxlength="11" placeholder="Provide in English">
                    <span class="bt-flabels__error-desc">
                        <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;">Enter your 11 digit mobile number....</font>
                        </font>
                    </span>
                </div>

            </div>
        </div>

        <div class="col-md-12 text-center" id="national_id_error"></div>

        <div class="col-md-12">
            <div class="row form-group">
                <label for="nid" class="col-sm-3 control-label">
                    <font style="vertical-align: inherit;">
                        <font style="vertical-align: inherit;">National ID (in English)</font>
                    </font>
                </label>
                <div class="col-sm-3 bt-flabels__wrapper">
                    <input type="text" name="nid" id="nid" value="" class="form-control "
                        data-parsley-maxlength="17" autocomplete="nid" autofocus="" data-parsley-type="number"
                        placeholder="1616623458679011">
                    <span class="bt-flabels__error-desc">
                        <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;">Enter your National ID number in English....</font>
                        </font>
                    </span>
                </div>

                <label for="birth_id" class="col-sm-3 control-label">
                    <font style="vertical-align: inherit;">
                        <font style="vertical-align: inherit;">Birth Registration Number (in English)</font>
                    </font>
                </label>
                <div class="col-sm-3 bt-flabels__wrapper">
                    <input type="text" name="birth_id" value="" id="birth_id" class="form-control "
                        autocomplete="birth_id" autofocus="" data-parsley-maxlength="17"
                        data-parsley-type="number" placeholder="1919623458679011">
                    <span class="bt-flabels__error-desc">
                        <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;">Birth registration number date in English....</font>
                        </font>
                    </span>
                </div>
            </div>
        </div>

        <div class="col-md-12">
            <div class="row form-group">
                <label for="passport_no" class="col-sm-3 control-label">
                    <font style="vertical-align: inherit;">
                        <font style="vertical-align: inherit;">Passport number (in English)</font>
                    </font>
                </label>
                <div class="col-sm-3 bt-flabels__wrapper">
                    <input type="text" name="passport_no" value="" id="passport_no" class="form-control "
                        autocomplete="passport_no" autofocus="" data-parsley-type="text"
                        data-parsley-maxlength="17" placeholder="1616623458679011">
                    <span class="bt-flabels__error-desc">
                        <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;">Enter your passport number in English....</font>
                        </font>
                    </span>
                </div>

                <label for="birth_date" class="col-sm-3 control-label">
                    <font style="vertical-align: inherit;">
                        <font style="vertical-align: inherit;">Date of birth</font>
                    </font>
                </label>
                <div class="col-sm-3 bt-flabels__wrapper">
                    <input type="text" name="birth_date" value="" id="birth_date"
                        class="form-control hasDatepicker" autocomplete="birth_date" autofocus=""
                        data-parsley-type="date" placeholder="0000-00-00">
                    <span class="bt-flabels__error-desc">
                        <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;">Give your date of birth....</font>
                        </font>
                    </span>
                </div>
            </div>
        </div>

        <div class="col-md-12">
            <div class="row form-group">
                <label for="father_name_bn" class="col-sm-3 control-label">
                    <font style="vertical-align: inherit;">
                        <font style="vertical-align: inherit;">Father's name</font>
                    </font>
                </label>
                <div class="col-sm-3 bt-flabels__wrapper">
                    <input type="text" name="father_name_bn" id="father_name_bn" value=""
                        class="form-control " autocomplete="father_name_bn" autofocus=""
                        placeholder="Father's name">
                    <span class="bt-flabels__error-desc">
                        <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;">Give your father's name in Bengali....</font>
                        </font>
                    </span>
                </div>

                <label for="mother_name_bn" class="col-sm-3 control-label">
                    <font style="vertical-align: inherit;">
                        <font style="vertical-align: inherit;">Mother's name</font>
                    </font>
                </label>
                <div class="col-sm-3 bt-flabels__wrapper">
                    <input type="text" name="mother_name_bn" id="mother_name_bn" value=""
                        class="form-control " autocomplete="mother_name_bn" autofocus=""
                        placeholder="Mother's name">
                    <span class="bt-flabels__error-desc">
                        <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;">Give your mother's name in Bengali....</font>
                        </font>
                    </span>
                </div>
            </div>
        </div>
    </div>

    <div class="row" style="margin-top: 50px;">
        <div class="col-md-12">
            <div class="row form-group">
                <label for="occupation" class="col-sm-3 control-label">
                    <font style="vertical-align: inherit;">
                        <font style="vertical-align: inherit;">Occupation</font>
                    </font>
                </label>
                <div class="col-sm-3 bt-flabels__wrapper">
                    <select name="occupation" id="occupation" class="form-control ">
                        <option value="">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">Mark</font>
                            </font>
                        </option>
                        <option value="1">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">Agriculture</font>
                            </font>
                        </option>
                        <option value="2">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">Housewife</font>
                            </font>
                        </option>
                        <option value="3">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">Government job</font>
                            </font>
                        </option>
                        <option value="4">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">Private sector employment</font>
                            </font>
                        </option>
                        <option value="5">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">Businessman</font>
                            </font>
                        </option>
                        <option value="6">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">Teacher</font>
                            </font>
                        </option>
                        <option value="7">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">Expatriate</font>
                            </font>
                        </option>
                        <option value="8">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">Driver</font>
                            </font>
                        </option>
                        <option value="9">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">Doctor</font>
                            </font>
                        </option>
                        <option value="10">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">Lawyer</font>
                            </font>
                        </option>
                        <option value="11">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">Blacksmith</font>
                            </font>
                        </option>
                        <option value="12">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">Kumar</font>
                            </font>
                        </option>
                        <option value="13">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">In prison</font>
                            </font>
                        </option>
                        <option value="14">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">Other</font>
                            </font>
                        </option>
                    </select>
                    <span class="bt-flabels__error-desc">
                        <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;">Please select....</font>
                        </font>
                    </span>
                </div>

                <label for="resident" class="col-sm-3 control-label">
                    <font style="vertical-align: inherit;">
                        <font style="vertical-align: inherit;">Resident</font>
                    </font>
                </label>
                <div class="col-sm-3 bt-flabels__wrapper">
                    <select name="resident" id="resident" class="form-control ">
                        <option value="">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">Mark</font>
                            </font>
                        </option>
                        <option value="1">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">Temporary</font>
                            </font>
                        </option>
                        <option value="2">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">Permanent</font>
                            </font>
                        </option>
                    </select>
                    <span class="bt-flabels__error-desc">
                        <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;">Please select....</font>
                        </font>
                    </span>
                </div>
            </div>
        </div>

        <div class="col-md-12">
            <div class="row form-group">
                <label for="educational_qualification" class="col-sm-3 control-label">
                    <font style="vertical-align: inherit;">
                        <font style="vertical-align: inherit;">Educational Qualification</font>
                    </font>
                </label>
                <div class="col-sm-3 bt-flabels__wrapper">
                    <select name="educational_qualification" id="educational_qualification" class="form-control ">
                        <option value="">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">Mark</font>
                            </font>
                        </option>
                        <option value="1">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">Primary</font>
                            </font>
                        </option>
                        <option value="2">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">J,S,C</font>
                            </font>
                        </option>
                        <option value="3">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">P.S.C.</font>
                            </font>
                        </option>
                        <option value="4">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">S,S,C</font>
                            </font>
                        </option>
                        <option value="5">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">H.S.C.</font>
                            </font>
                        </option>
                        <option value="6">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">Graduate</font>
                            </font>
                        </option>
                        <option value="7">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">Postgraduate</font>
                            </font>
                        </option>
                    </select>
                    <span class="bt-flabels__error-desc">
                        <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;">Please select....</font>
                        </font>
                    </span>
                </div>

                <label for="religion" class="col-sm-3 control-label">
                    <font style="vertical-align: inherit;">
                        <font style="vertical-align: inherit;">Religion</font>
                    </font>
                </label>
                <div class="col-sm-3 bt-flabels__wrapper">
                    <select name="religion" id="religion" class="form-control ">
                        <option value="">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">Mark</font>
                            </font>
                        </option>
                        <option value="1">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">Islam</font>
                            </font>
                        </option>
                        <option value="2">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">Hindu</font>
                            </font>
                        </option>
                        <option value="3">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">Buddhism</font>
                            </font>
                        </option>
                        <option value="4">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">Christianity</font>
                            </font>
                        </option>
                        <option value="5">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">Other</font>
                            </font>
                        </option>
                    </select>
                    <span class="bt-flabels__error-desc">
                        <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;">Please select....</font>
                        </font>
                    </span>
                </div>
            </div>
        </div>

        <div class="col-md-12" id="genderErr">
            <div class="row form-group">
                <label class="col-sm-3 control-label">
                    <font style="vertical-align: inherit;">
                        <font style="vertical-align: inherit;">Gender </font>
                    </font><span class="text-danger">
                        <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;">*</font>
                        </font>
                    </span>
                </label>
                <div class="col-sm-3 " id="genderErrMess" data-parsley-required="">
                    <label class="radio-inline gender">
                        <input type="radio" id="gender_1" name="gender" value="1"
                            data-parsley-multiple="gender">
                        <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;">Male
                            </font>
                        </font>
                    </label>
                    <label class="radio-inline gender">
                        <input type="radio" id="gender_2" name="gender" value="2"
                            data-parsley-multiple="gender">
                        <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;">Woman
                            </font>
                        </font>
                    </label>
                    <label class="radio-inline gender">
                        <input type="radio" id="gender_3" name="gender" value="3"
                            data-parsley-multiple="gender">
                        <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;">third gender
                            </font>
                        </font>
                    </label>
                </div>

                <label for="marital_status" class="col-sm-3 control-label">
                    <font style="vertical-align: inherit;">
                        <font style="vertical-align: inherit;">Marital status </font>
                    </font><span class="text-danger">
                        <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;">*</font>
                        </font>
                    </span>
                </label>
                <div class="col-sm-3 bt-flabels__wrapper">
                    <select name="marital_status" id="marital_status" class="form-control "
                        data-parsley-required="">
                        <option value="">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">Mark</font>
                            </font>
                        </option>
                        <option value="1">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">Single</font>
                            </font>
                        </option>
                        <option value="2">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">Married</font>
                            </font>
                        </option>
                        <option value="4">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">Widow</font>
                            </font>
                        </option>
                        <option value="5">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">Other</font>
                            </font>
                        </option>
                    </select>
                    <span class="bt-flabels__error-desc">
                        <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;">Please select....</font>
                        </font>
                    </span>
                </div>
            </div>
        </div>

        <div class="col-md-12" id="relation">
            <div class="row form-group" style="display: none;" id="husband">
                <label for="husband_name_en" class="col-sm-3 control-label">
                    <font style="vertical-align: inherit;">
                        <font style="vertical-align: inherit;">Husband's name (in English)</font>
                    </font>
                </label>
                <div class="col-sm-3 bt-flabels__wrapper">
                    <input type="text" name="husband_name_en" id="husband_name_en" value=""
                        class="form-control " data-parsley-pattern="^[a-zA-Z. ]+$" data-parsley-trigger="keyup"
                        placeholder="Husband's name">
                    <span class="bt-flabels__error-desc">
                        <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;">Give your husband's name in English....</font>
                        </font>
                    </span>
                </div>

                <label for="husband_name_bn" class="col-sm-3 control-label">
                    <font style="vertical-align: inherit;">
                        <font style="vertical-align: inherit;">Husband's name (in Bengali)</font>
                    </font>
                </label>
                <div class="col-sm-3 bt-flabels__wrapper">
                    <input type="text" name="husband_name_bn" id="husband_name_bn" value=""
                        class="form-control " placeholder="Husband's name">
                    <span class="bt-flabels__error-desc">
                        <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;">Give your husband's name in Bengali....</font>
                        </font>
                    </span>
                </div>
            </div>

            <div class="row form-group" style="display: none;" id="wife">
                <label for="wife_name_en" class="col-sm-3 control-label">
                    <font style="vertical-align: inherit;">
                        <font style="vertical-align: inherit;">Wife's name (in English)</font>
                    </font>
                </label>
                <div class="col-sm-3 bt-flabels__wrapper">
                    <input type="text" name="wife_name_en" value="" id="wife_name_en"
                        class="form-control " data-parsley-pattern="^[a-zA-Z. ]+$" data-parsley-trigger="keyup"
                        placeholder="Wife's name">
                    <span class="bt-flabels__error-desc">
                        <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;">Give your wife's name in English....</font>
                        </font>
                    </span>
                </div>

                <label for="wife_name_bn" class="col-sm-3 control-label">
                    <font style="vertical-align: inherit;">
                        <font style="vertical-align: inherit;">Wife's name (in Bengali)</font>
                    </font>
                </label>
                <div class="col-sm-3 bt-flabels__wrapper">
                    <input type="text" name="wife_name_bn" id="wife_name_bn" value=""
                        class="form-control " placeholder="Wife's name">
                    <span class="bt-flabels__error-desc">
                        <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;">Give your wife's name in Bengali....</font>
                        </font>
                    </span>
                </div>
            </div>
        </div>
    </div>

    <div class="row" style="margin-top: 50px;">
        <div class="col-sm-12 text-center">
            <h4 class="app-heading">
                <font style="vertical-align: inherit;">
                    <font style="vertical-align: inherit;">
                        Permanent address
                    </font>
                </font>
            </h4>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-12">
            <div class="row form-group">
                <label for="permanent_holding_no" class="col-sm-3 control-label">
                    <font style="vertical-align: inherit;">
                        <font style="vertical-align: inherit;">Holding/Assessment No. </font>
                    </font><span class="text-danger">
                        <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;">*</font>
                        </font>
                    </span>
                </label>
                <div class="col-sm-3 bt-flabels__wrapper">
                    <input type="text" name="permanent_holding_no" id="permanent_holding_no" value=""
                        class="form-control " autocomplete="permanent_holding_no" data-parsley-required=""
                        autofocus="" data-parsley-trigger="keyup">
                    <span class="bt-flabels__error-desc">
                        <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;">Give the holding/assessment number in English....
                            </font>
                        </font>
                    </span>
                </div>
            </div>
        </div>

        <div class="col-sm-12">
            <div class="row form-group">
                <label for="ward_no" class="col-sm-3 control-label">
                    <font style="vertical-align: inherit;">
                        <font style="vertical-align: inherit;">Ward No. </font>
                    </font><span class="text-danger">
                        <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;">*</font>
                        </font>
                    </span>
                </label>
                <div class="col-sm-3 bt-flabels__wrapper">
                    <select name="ward_no" id="ward_no" required="" onchange="set_ward_name(this.value);"
                        class="form-control ">
                        <option value="">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">--Select--</font>
                            </font>
                        </option>
                        <option value="1">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">1</font>
                            </font>
                        </option>
                        <option value="2">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">2</font>
                            </font>
                        </option>
                        <option value="3">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">3</font>
                            </font>
                        </option>
                        <option value="4">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">4</font>
                            </font>
                        </option>
                        <option value="5">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">5</font>
                            </font>
                        </option>
                        <option value="6">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">6</font>
                            </font>
                        </option>
                        <option value="7">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">7</font>
                            </font>
                        </option>
                        <option value="8">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">8</font>
                            </font>
                        </option>
                        <option value="9">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">9</font>
                            </font>
                        </option>
                    </select>
                    <span class="bt-flabels__error-desc">
                        <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;">Select the word....</font>
                        </font>
                    </span>
                </div>

                <label for="moholla_id" class="col-sm-3 control-label">
                    <font style="vertical-align: inherit;">
                        <font style="vertical-align: inherit;">Village/Neighborhood/Neighborhood </font>
                    </font><span class="text-danger">
                        <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;">*</font>
                        </font>
                    </span>
                </label>
                <div class="col-sm-3 bt-flabels__wrapper">
                    <select name="moholla_id" class="form-control" id="moholla_id" data-parsley-required="">
                        <option value="">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">Select Village/Mahalla/Para</font>
                            </font>
                        </option>
                    </select>
                    <span class="bt-flabels__error-desc">
                        <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;">Select village/neighborhood/neighborhood....</font>
                        </font>
                    </span>
                </div>
            </div>
        </div>

        <div class="col-sm-12">
            <div class="row form-group">
                <label for="permanent_rbs_bn" class="col-sm-3 control-label">
                    <font style="vertical-align: inherit;">
                        <font style="vertical-align: inherit;">Road/Block/Sector (in Bengali)</font>
                    </font>
                </label>
                <div class="col-sm-3 bt-flabels__wrapper">
                    <input type="text" name="permanent_rbs_bn" id="permanent_rbs_bn" value=""
                        class="form-control " placeholder="" autocomplete="permanent_rbs_bn" autofocus=""
                        data-parsley-maxlength="100" data-parsley-trigger="keyup">
                    <span class="bt-flabels__error-desc">
                        <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;">Road/Block/Sector in Bengali....</font>
                        </font>
                    </span>
                </div>

                <label for="permanent_district_id" class="col-sm-3 control-label">
                    <font style="vertical-align: inherit;">
                        <font style="vertical-align: inherit;">District </font>
                    </font><span class="text-danger">
                        <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;">*</font>
                        </font>
                    </span>
                </label>
                <div class="col-sm-3 bt-flabels__wrapper">
                    <select
                        onchange="getLocation($(this).val(), 'permanent_district', 'permanent_upazila_append', 'permanent_upazila_id', 'permanent_upazila', 3 )"
                        name="permanent_district_id" id="permanent_district_id"
                        class="custom-select2 form-control select2-hidden-accessible"
                        style="width: 100%; height: 38px;" data-parsley-required=""
                        data-select2-id="permanent_district_id" tabindex="-1" aria-hidden="true">
                        <option value="" class="district_append" data-select2-id="2">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">-Select your district-</font>
                            </font>
                        </option>
                    </select><span class="select2 select2-container select2-container--default" dir="ltr"
                        data-select2-id="1" style="width: 100%;"><span class="selection"><span
                                class="select2-selection select2-selection--single" role="combobox"
                                aria-haspopup="true" aria-expanded="false" tabindex="0"
                                aria-labelledby="select2-permanent_district_id-container"><span
                                    class="select2-selection__rendered" id="select2-permanent_district_id-container"
                                    role="textbox" aria-readonly="true" title="-Select your district-">
                                    <font style="vertical-align: inherit;">
                                        <font style="vertical-align: inherit;">-Select your district-</font>
                                    </font>
                                </span><span class="select2-selection__arrow" role="presentation"><b
                                        role="presentation"></b></span></span></span><span class="dropdown-wrapper"
                            aria-hidden="true"></span></span>
                    <span class="bt-flabels__error-desc">
                        <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;">Select district....</font>
                        </font>
                    </span>
                </div>
            </div>
        </div>

        <div class="col-sm-12">
            <div class="row form-group">
                <label for="permanent_upazila_id" class="col-sm-3 control-label">
                    <font style="vertical-align: inherit;">
                        <font style="vertical-align: inherit;">Upazila/Thana </font>
                    </font><span class="text-danger">
                        <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;">*</font>
                        </font>
                    </span>
                </label>
                <div class="col-sm-3 bt-flabels__wrapper">
                    <select
                        onchange="getLocation($(this).val(), 'permanent_upazila', 'permanent_post_office_append', 'permanent_postoffice_id', 'permanent_postoffice', 6 )"
                        name="permanent_upazila_id" id="permanent_upazila_id" class="form-control "
                        data-parsley-required="">
                        <option value="" id="permanent_upazila_append">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">Mark</font>
                            </font>
                        </option>
                    </select>
                    <span class="bt-flabels__error-desc">
                        <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;">Select Upazila/Thana....</font>
                        </font>
                    </span>
                </div>

                <label for="permanent_postoffice_id" class="col-sm-3 control-label">
                    <font style="vertical-align: inherit;">
                        <font style="vertical-align: inherit;">Post Office </font>
                    </font><span class="text-danger">
                        <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;">*</font>
                        </font>
                    </span>
                </label>
                <div class="col-sm-3 bt-flabels__wrapper">
                    <select onchange="getLocation($(this).val(), 'permanent_postoffice')"
                        name="permanent_postoffice_id" id="permanent_postoffice_id" class="form-control "
                        data-parsley-required="">
                        <option value="" id="permanent_post_office_append">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">Mark</font>
                            </font>
                        </option>
                    </select>
                    <span class="bt-flabels__error-desc">
                        <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;">Select post office....</font>
                        </font>
                    </span>
                </div>
            </div>
        </div>
    </div>

    <div class="row" style="margin-top: 50px;">
        <div class="col-sm-12" style="text-align:center;">
            <h4 class="app-heading">
                <font style="vertical-align: inherit;">
                    <font style="vertical-align: inherit;">Household survey data</font>
                </font>
            </h4>
            <hr>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-12">
            <div class="row form-group">
                <label for="male" class="col-sm-3 control-label">
                    <font style="vertical-align: inherit;">
                        <font style="vertical-align: inherit;">Male </font>
                    </font><span class="text-danger">
                        <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;">*</font>
                        </font>
                    </span>
                </label>
                <div class="col-sm-3 bt-flabels__wrapper">
                    <input type="text" name="male" id="male" value="" class="form-control "
                        placeholder="Number of men" autocomplete="male" autofocus="" data-parsley-type="number"
                        data-parsley-required="" data-parsley-trigger="keyup">
                    <span class="bt-flabels__error-desc">
                        <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;">Please give the number of men in numerical order...
                            </font>
                        </font>
                    </span>
                </div>

                <label for="female" class="col-sm-3 control-label">
                    <font style="vertical-align: inherit;">
                        <font style="vertical-align: inherit;">Female </font>
                    </font><span class="text-danger">
                        <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;">*</font>
                        </font>
                    </span>
                </label>
                <div class="col-sm-3 bt-flabels__wrapper">
                    <input type="text" name="female" id="female" data-parsley-required="" value=""
                        class="form-control " placeholder="Woman's number" autocomplete="female" autofocus=""
                        data-parsley-type="number" data-parsley-trigger="keyup">
                    <span class="bt-flabels__error-desc">
                        <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;">Please give the number of women in numerical
                                order....</font>
                        </font>
                    </span>
                </div>
            </div>

            <div class="row form-group">
                <label for="child" class="col-sm-3 control-label">
                    <font style="vertical-align: inherit;">
                        <font style="vertical-align: inherit;">Child</font>
                    </font>
                </label>
                <div class="col-sm-3 bt-flabels__wrapper">
                    <input type="text" name="child" id="child" value="" class="form-control "
                        placeholder="Number of children" autocomplete="child" autofocus=""
                        data-parsley-type="number" data-parsley-trigger="keyup">
                    <span class="bt-flabels__error-desc">
                        <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;">Please enter the number of children in numerical
                                order....</font>
                        </font>
                    </span>
                </div>

                <label for="handicap" class="col-sm-3 control-label">
                    <font style="vertical-align: inherit;">
                        <font style="vertical-align: inherit;">Number of disabilities?</font>
                    </font>
                </label>
                <div class="col-sm-3 bt-flabels__wrapper">
                    <input type="text" name="handicap" id="handicap" value="" class="form-control "
                        placeholder="Number of handicaps" autocomplete="handicap" autofocus=""
                        data-parsley-type="number" data-parsley-trigger="keyup">
                    <span class="bt-flabels__error-desc">
                        <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;">Please enter the number of disabilities in numerical
                                format...</font>
                        </font>
                    </span>
                </div>
            </div>

            <div class="row form-group">
                <label for="member_of_earning" class="col-sm-3 control-label">
                    <font style="vertical-align: inherit;">
                        <font style="vertical-align: inherit;">Number of earning members in the family</font>
                    </font>
                </label>
                <div class="col-sm-3 bt-flabels__wrapper">
                    <input type="text" name="member_of_earning" id="member_of_earning" value=""
                        class="form-control " placeholder="Number of earning members in the family"
                        autocomplete="member_of_earning" autofocus="" data-parsley-type="number"
                        data-parsley-trigger="keyup">
                    <span class="bt-flabels__error-desc">
                        <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;">Please provide the number of income earners in the
                                household in numerical format....</font>
                        </font>
                    </span>
                </div>

                <label for="number_of_dependents_family" class="col-sm-3 control-label">
                    <font style="vertical-align: inherit;">
                        <font style="vertical-align: inherit;">Number of dependents in the family</font>
                    </font>
                </label>
                <div class="col-sm-3 bt-flabels__wrapper">
                    <input type="text" name="number_of_dependents_family" id="number_of_dependents_family"
                        value="" class="form-control " placeholder="Number of dependents in the family"
                        autocomplete="number_of_dependents_family" autofocus="" data-parsley-type="number"
                        data-parsley-trigger="keyup">
                    <span class="bt-flabels__error-desc">
                        <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;">Please enter the number of dependents in the
                                household in numerical format....</font>
                        </font>
                    </span>
                </div>
            </div>

            <div class="row form-group">
                <label for="ssc_job_holder" class="col-sm-3 control-label">
                    <font style="vertical-align: inherit;">
                        <font style="vertical-align: inherit;">Number of job seekers in the family aged 18-35,
                            SSC/above pass</font>
                    </font>
                </label>
                <div class="col-sm-3 bt-flabels__wrapper">
                    <input type="text" name="ssc_job_holder" id="ssc_job_holder" value=""
                        class="form-control "
                        placeholder="Number of job seekers in the family aged 18-35, SSC/above pass"
                        autocomplete="ssc_job_holder" autofocus="" data-parsley-type="number"
                        data-parsley-trigger="keyup">
                    <span class="bt-flabels__error-desc">
                        <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;">Please provide the number of job seekers in the
                                family aged 18-35, SSC/above pass, in numerical format....</font>
                        </font>
                    </span>
                </div>

                <label for="hsc_job_holder" class="col-sm-3 control-label">
                    <font style="vertical-align: inherit;">
                        <font style="vertical-align: inherit;">Number of people in the family aged 18-35, SSC/above
                            pass, aspiring to become entrepreneurs</font>
                    </font>
                </label>
                <div class="col-sm-3 bt-flabels__wrapper">
                    <input type="text" name="hsc_job_holder" id="hsc_job_holder" value=""
                        class="form-control "
                        placeholder="Number of people in the family aged 18-35, SSC/above pass, aspiring to become entrepreneurs"
                        autocomplete="hsc_job_holder" autofocus="" data-parsley-type="number"
                        data-parsley-trigger="keyup">
                    <span class="bt-flabels__error-desc">
                        <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;">Please provide the number of people in the family
                                aged 18-35 years who are aspiring to become entrepreneurs, SSC/above pass, in numerical
                                format....</font>
                        </font>
                    </span>
                </div>
            </div>

            <div class="row form-group">
                <label for="land_owner" class="col-sm-3 control-label">
                    <font style="vertical-align: inherit;">
                        <font style="vertical-align: inherit;">Land ownership</font>
                    </font>
                </label>
                <div class="col-sm-3 bt-flabels__wrapper">
                    <input type="text" name="land_owner" id="land_owner" value="" class="form-control "
                        placeholder="Provide land ownership" autocomplete="land_owner" autofocus=""
                        data-parsley-trigger="keyup">
                    <span class="bt-flabels__error-desc">
                        <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;">Please provide ownership of the land....</font>
                        </font>
                    </span>
                </div>

                <label for="income_source" class="col-sm-3 control-label">
                    <font style="vertical-align: inherit;">
                        <font style="vertical-align: inherit;">Annual income source</font>
                    </font>
                </label>
                <div class="col-sm-3 bt-flabels__wrapper">
                    <input type="text" name="income_source" id="income_source" value=""
                        class="form-control " placeholder="Provide an annual source of income."
                        autocomplete="income_source" autofocus="" data-parsley-trigger="keyup">
                    <span class="bt-flabels__error-desc">
                        <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;">Give the source of annual income....</font>
                        </font>
                    </span>
                </div>
            </div>

            <div class="row form-group">
                <label for="yearly_income" class="col-sm-3 control-label">
                    <font style="vertical-align: inherit;">
                        <font style="vertical-align: inherit;">Annual income</font>
                    </font>
                </label>
                <div class="col-sm-3 bt-flabels__wrapper">
                    <input type="text" name="yearly_income" id="yearly_income" value=""
                        class="form-control" placeholder="Annual income" autocomplete="yearly_income" autofocus=""
                        data-parsley-trigger="keyup">
                </div>

                <label for="nolkupErrMess" class="col-sm-3 control-label">
                    <font style="vertical-align: inherit;">
                        <font style="vertical-align: inherit;">Is there a tube well?</font>
                    </font>
                </label>
                <div class="col-sm-3 " id="nolkupErrMess" data-parsley-required="">
                    <label class="radio-inline nolkup">
                        <input type="radio" id="nolkup_1" name="nolkup" value="1"
                            data-parsley-multiple="nolkup">
                        <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;">Yes
                            </font>
                        </font>
                    </label>
                    <label class="radio-inline nolkup">
                        <input type="radio" id="nolkup_2" name="nolkup" value="2"
                            data-parsley-multiple="nolkup">
                        <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;">No
                            </font>
                        </font>
                    </label>
                </div>
            </div>

            <div class="row form-group">
                <label for="expanse_sector" class="col-sm-3 control-label">
                    <font style="vertical-align: inherit;">
                        <font style="vertical-align: inherit;">Major expenditure items</font>
                    </font>
                </label>
                <div class="col-sm-3 bt-flabels__wrapper">
                    <input type="text" name="expanse_sector" id="expanse_sector" value=""
                        class="form-control " placeholder="Provide the main categories of expenses."
                        autocomplete="expanse_sector" autofocus="" data-parsley-trigger="keyup">
                    <span class="bt-flabels__error-desc">
                        <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;">Please provide the main areas of expenditure....
                            </font>
                        </font>
                    </span>
                </div>

                <label for="remittance_senders" class="col-sm-3 control-label">
                    <font style="vertical-align: inherit;">
                        <font style="vertical-align: inherit;">Number of remittance senders/number of expatriates in
                            the household</font>
                    </font>
                </label>
                <div class="col-sm-3 bt-flabels__wrapper">
                    <input type="text" name="remittance_senders" id="remittance_senders" value=""
                        class="form-control "
                        placeholder="Provide the number of remittance senders/expatriates in the household."
                        autocomplete="remittance_senders" autofocus="" data-parsley-type="number"
                        data-parsley-trigger="keyup">
                    <span class="bt-flabels__error-desc">
                        <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;">Please provide the number of remittance
                                senders/expatriates in the family....</font>
                        </font>
                    </span>
                </div>
            </div>

            <div class="row form-group">
                <label for="sanitationErrMess" class="col-sm-3 control-label">
                    <font style="vertical-align: inherit;">
                        <font style="vertical-align: inherit;">Sanitation status</font>
                    </font>
                </label>
                <div class="col-sm-3 " id="sanitationErrMess" data-parsley-required="">
                    <label class="radio-inline sanitation">
                        <input type="radio" id="sanitation_1" name="sanitation" value="1"
                            data-parsley-multiple="sanitation">
                        <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;">Raw
                            </font>
                        </font>
                    </label>
                    <label class="radio-inline sanitation">
                        <input type="radio" id="sanitation_2" name="sanitation" value="2"
                            data-parsley-multiple="sanitation">
                        <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;">Ripe
                            </font>
                        </font>
                    </label>
                </div>

                <label for="electronics_instrumentErrMess" class="col-sm-3 control-label">
                    <font style="vertical-align: inherit;">
                        <font style="vertical-align: inherit;">Is there electricity/mobile phone/computer?</font>
                    </font>
                </label>
                <div class="col-sm-3 " id="electronics_instrumentErrMess" data-parsley-required="">
                    <label class="radio-inline electronics_instrument">
                        <input type="radio" id="electronics_instrument_1" name="electronics_instrument"
                            value="1" data-parsley-multiple="electronics_instrument">
                        <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;">Yes
                            </font>
                        </font>
                    </label>
                    <label class="radio-inline electronics_instrument">
                        <input type="radio" id="electronics_instrument_2" name="electronics_instrument"
                            value="2" data-parsley-multiple="electronics_instrument">
                        <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;">No
                            </font>
                        </font>
                    </label>
                </div>
            </div>

            <div class="row form-group">
                <label for="social_securityErrMess" class="col-sm-3 control-label">
                    <font style="vertical-align: inherit;">
                        <font style="vertical-align: inherit;">Is social security covered by the program?</font>
                    </font>
                </label>
                <div class="col-sm-3 " id="social_securityErrMess" data-parsley-required="">
                    <label class="radio-inline social_security">
                        <input type="radio" onclick="showOption(this.value)" id="social_security_1"
                            name="social_security" value="1" data-parsley-multiple="social_security">
                        <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;">Yes
                            </font>
                        </font>
                    </label>
                    <label class="radio-inline social_security">
                        <input type="radio" onclick="showOption(this.value)" id="social_security_2"
                            name="social_security" value="2" data-parsley-multiple="social_security">
                        <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;">No
                            </font>
                        </font>
                    </label>
                </div>

                <div class="col-sm-3">
                    <select class="form-control " name="security_program" id="security_program"
                        aria-label="Security program" style="display: none">
                        <option value="">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">Select</font>
                            </font>
                        </option>
                        <option value="1">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">Old age allowance</font>
                            </font>
                        </option>
                        <option value="2">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">Widow's allowance</font>
                            </font>
                        </option>
                        <option value="3">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">Disability allowance</font>
                            </font>
                        </option>
                        <option value="4">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">Mother and child support allowance</font>
                            </font>
                        </option>
                        <option value="5">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">VWB</font>
                            </font>
                        </option>
                    </select>
                </div>
            </div>
        </div>
    </div>

    <div class="row" style="margin-top: 50px;">
        <div class="col-sm-12" style="text-align: center;">
            <h4 class="app-heading">
                <font style="vertical-align: inherit;">
                    <font style="vertical-align: inherit;">Accommodation information</font>
                </font>
            </h4>
            <hr>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-12">
            <div class="row form-group">
                <label for="multi_building_house" class="col-sm-3 control-label">
                    <font style="vertical-align: inherit;">
                        <font style="vertical-align: inherit;">Multi-storey building</font>
                    </font>
                </label>
                <div class="col-sm-3 bt-flabels__wrapper">
                    <input type="text" name="multi_building_house" id="multi_building_house" value=""
                        class="form-control" placeholder="Number of multi-storey buildings"
                        autocomplete="multi_building_house" autofocus="" data-parsley-type="number"
                        data-parsley-trigger="keyup">
                    <span class="bt-flabels__error-desc">
                        <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;">Give the number of multi-storey buildings....
                            </font>
                        </font>
                    </span>
                </div>

                <label for="ripe_house" class="col-sm-3 control-label">
                    <font style="vertical-align: inherit;">
                        <font style="vertical-align: inherit;">Paved building</font>
                    </font>
                </label>
                <div class="col-sm-3 bt-flabels__wrapper">
                    <input type="text" name="ripe_house" id="ripe_house" value=""
                        class="form-control" placeholder="Number of concrete buildings" autocomplete="ripe_house"
                        autofocus="" data-parsley-type="number" data-parsley-trigger="keyup">
                    <span class="bt-flabels__error-desc">
                        <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;">Give the number of pucca buildings....</font>
                        </font>
                    </span>
                </div>
            </div>
        </div>

        <div class="col-sm-12">
            <div class="row form-group">
                <label for="semi_ripe_house" class="col-sm-3 control-label">
                    <font style="vertical-align: inherit;">
                        <font style="vertical-align: inherit;">Semi-detached building</font>
                    </font>
                </label>
                <div class="col-sm-3 bt-flabels__wrapper">
                    <input type="text" name="semi_ripe_house" id="semi_ripe_house" value=""
                        class="form-control" placeholder="Number of semi-detached buildings"
                        autocomplete="semi_ripe_house" autofocus="" data-parsley-type="number"
                        data-parsley-trigger="keyup">
                    <span class="bt-flabels__error-desc">
                        <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;">Give the number of semi-detached buildings....
                            </font>
                        </font>
                    </span>
                </div>

                <label for="tin_shed_house" class="col-sm-3 control-label">
                    <font style="vertical-align: inherit;">
                        <font style="vertical-align: inherit;">Tin shed</font>
                    </font>
                </label>
                <div class="col-sm-3 bt-flabels__wrapper">
                    <input type="text" name="tin_shed_house" id="tin_shed_house" value=""
                        class="form-control" placeholder="Tinshed number" autocomplete="tin_shed_house"
                        autofocus="" data-parsley-type="number" data-parsley-trigger="keyup">
                    <span class="bt-flabels__error-desc">
                        <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;">Give the tin shed number....</font>
                        </font>
                    </span>
                </div>
            </div>
        </div>

        <div class="col-sm-12">
            <div class="row form-group">
                <label for="raw_house" class="col-sm-3 control-label">
                    <font style="vertical-align: inherit;">
                        <font style="vertical-align: inherit;">Raw house</font>
                    </font>
                </label>
                <div class="col-sm-3 bt-flabels__wrapper">
                    <input type="text" name="raw_house" id="raw_house" value="" class="form-control"
                        placeholder="Number of raw houses" autocomplete="raw_house" autofocus=""
                        data-parsley-type="raw_house" data-parsley-trigger="keyup">
                    <span class="bt-flabels__error-desc">
                        <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;">Give the number of unbuilt houses....</font>
                        </font>
                    </span>
                </div>
            </div>
        </div>
    </div>

    <hr>

    <div class="row">
        <div class="col-sm-12">
            <div class="row form-group">
                <label for="probable_rate" class="col-sm-3 control-label">
                    <font style="vertical-align: inherit;">
                        <font style="vertical-align: inherit;">Annual evaluation </font>
                    </font><span class="text-danger">
                        <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;">*</font>
                        </font>
                    </span>
                </label>
                <div class="col-sm-3 bt-flabels__wrapper">
                    <input type="number" name="probable_rate" id="probable_rate" value=""
                        class="form-control" placeholder="Annual evaluation" autocomplete="probable_rate"
                        autofocus="" data-parsley-required="" data-parsley-type="number"
                        data-parsley-trigger="keyup">
                    <span class="bt-flabels__error-desc">
                        <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;">Please give an annual evaluation....</font>
                        </font>
                    </span>
                </div>

                <label for="halson_tax" class="col-sm-3 control-label">
                    <font style="vertical-align: inherit;">
                        <font style="vertical-align: inherit;">Tax levied </font>
                    </font><span class="text-danger">
                        <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;">*</font>
                        </font>
                    </span> <br>
                    <font style="vertical-align: inherit;">
                        <font style="vertical-align: inherit;"> ( </font>
                    </font><span class="text-danger small">
                        <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;">Tax levied as per law 1-7%</font>
                        </font>
                    </span>
                    <font style="vertical-align: inherit;">
                        <font style="vertical-align: inherit;"> )</font>
                    </font>
                </label>
                <div class="col-sm-3 bt-flabels__wrapper">
                    <div class="input-group mb-0">
                        <input type="number" step="any" name="halson_percentage" id="halson_percentage"
                            value="" class="form-control" placeholder="%" oninput="calculateHalsonTax()"
                            aria-label="Halson percentage" data-parsley-required="" data-parsley-type="number"
                            data-parsley-min="1" data-parsley-max="7" data-parsley-trigger="input">
                        <input type="number" name="halson_tax" id="halson_tax" value=""
                            class="form-control " placeholder="Tax" data-parsley-required=""
                            data-parsley-type="number" readonly="">
                    </div>
                    <span class="bt-flabels__error-desc">
                        <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;">Please pay the tax due....</font>
                        </font>
                    </span>
                </div>
            </div>
        </div>
    </div>

    <div class="row" style="margin-bottom: 100px; ">
        <div class="offset-6 col-sm-6 button-style mx-auto text-center">
            <input type="hidden" value="" name="pin" id="nagorik-pin">
            <input type="hidden" value="29" name="app-type" id="app-type">
            <button type="submit" class="btn btn-primary btn-center">
                <font style="vertical-align: inherit;">
                    <font style="vertical-align: inherit;">Submit</font>
                </font>
            </button>
        </div>
    </div>
</form>
