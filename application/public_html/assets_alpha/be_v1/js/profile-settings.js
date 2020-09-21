/*
Author       : Dreamguys
Template Name: Doccure - Bootstrap Template
Version      : 1.0
*/

(function($) {
    "use strict";

	// Education Add More
	
    $(".education-info").on('click','.trash', function () {
		$(this).closest('.education-cont').remove();
		return false;
    });

    $(".add-education").on('click', function () {
		
		var educationcontent = '<div class="row form-row education-cont">\n' +
			'                                    <div class="col-12 col-md-10 col-lg-11">\n' +
			'                                        <div class="row form-row">\n' +
			'                                            <div class="form-group row col-md-9">\n' +
			'                                                <label class="col-md-3 col-form-label">Degree<span class="text-danger">*</span></label>\n' +
			'                                                <div class="col-md-7">\n' +
			'                                                    <input type="text" class="form-control">\n' +
			'                                                </div>\n' +
			'                                            </div>\n' +
			'                                            <div class="form-group row col-md-9">\n' +
			'                                                <label class="col-md-3 col-form-label">Year<span class="text-danger">*</span></label>\n' +
			'                                                <div class="col-md-7">\n' +
			'                                                    <input type="number" class="form-control">\n' +
			'                                                </div>\n' +
			'                                            </div>\n' +
			'                                            <hr style="width:75%;text-align:center;">\n' +
			'                                        </div>\n' +
			'                                    </div>\n' +
			'                                    <div class="col-12 col-md-2 col-lg-1"><label\n' +
			'                                                class="d-md-block d-sm-none d-none">&nbsp;</label><a\n' +
			'                                                href="#" class="btn btn-danger trash"><i\n' +
			'                                                    class="fa fa-trash-o"></i></a></div>\n' +
			'                                </div>';
		
        $(".education-info").append(educationcontent);
        return false;
    });

	// Exp Add More

    $(".exp-info").on('click','.trash', function () {
		$(this).closest('.exp-cont').remove();
		return false;
    });

    $(".add-exp").on('click', function () {

		var expcontent = '<div class="row form-row exp-cont">\n' +
			'                                    <div class="col-12 col-md-10 col-lg-11">\n' +
			'                                        <div class="row form-row">\n' +
			'                                            <div class="form-group row col-md-9">\n' +
			'                                                <label class="col-md-3 col-form-label">Organisation<span class="text-danger">*</span></label>\n' +
			'                                                <div class="col-md-7">\n' +
			'                                                    <input type="text" class="form-control">\n' +
			'                                                </div>\n' +
			'                                            </div>\n' +
			'                                            <div class="form-group row col-md-9">\n' +
			'                                                <label class="col-md-3 col-form-label">Years<span class="text-danger">*</span></label>\n' +
			'                                                <div class="col-md-7">\n' +
			'                                                    <input type="number" class="form-control">\n' +
			'                                                </div>\n' +
			'                                            </div>\n' +
			'                                            <hr style="width:75%;text-align:center;">\n' +
			'                                        </div>\n' +
			'                                    </div>\n' +
			'                                    <div class="col-12 col-md-2 col-lg-1"><label\n' +
			'                                                class="d-md-block d-sm-none d-none">&nbsp;</label><a\n' +
			'                                                href="#" class="btn btn-danger trash"><i\n' +
			'                                                    class="fa fa-trash-o"></i></a></div>\n' +
			'                                </div>';

        $(".exp-info").append(expcontent);
        return false;
    });
	

	
})(jQuery);