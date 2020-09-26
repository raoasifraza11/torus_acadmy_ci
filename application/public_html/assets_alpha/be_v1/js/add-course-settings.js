/*
Author       : Dreamguys
Template Name: Doccure - Bootstrap Template
Version      : 1.0
*/

(function($) {
    "use strict";

	// Education Add More
	
    $(".course-info").on('click','.trash', function () {
		$(this).closest('.course-cont').remove();
		return false;
    });

    $(".add-course").on('click', function () {
		
		var courseAdd = '<div class="row form-row course-cont">\n' +
			'                                <div class="col-12 col-md-10 col-lg-11">\n' +
			'                                    <div class="row form-row">\n' +
			'                                        <div class="form-group row col-md-9">\n' +
			'                                            <label class="col-md-3 col-form-label">Subject Name<span class="text-danger">*</span></label>\n' +
			'                                            <div class="col-md-4">\n' +
			'                                                <input type="text" class="form-control" placeholder="i.e Chemistry">\n' +
			'                                            </div>\n' +
			'                                            <div class="col-md-4">\n' +
			'                                                <input type="text" class="form-control" placeholder="i.e CHY">\n' +
			'                                            </div>\n' +
			'                                        </div>\n' +
			'                                    </div>\n' +
			'                                </div>\n' +
			'                                <div class="col-12 col-md-2 col-lg-1"><label\n' +
			'                                            class="d-sm-none d-none">&nbsp;</label><a\n' +
			'                                            href="#" class="btn btn-danger trash"><i\n' +
			'                                                class="fa fa-trash-o"></i></a></div>\n' +
			'                            </div>';
		
        $(".course-info").append(courseAdd);
        return false;
    });

	
})(jQuery);