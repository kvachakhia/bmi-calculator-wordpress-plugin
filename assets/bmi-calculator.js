function bmiCalc(form) {
    var weight = Number(form.wt.value);
	var height = Number(form.ht.value);

	if (!checkNum(weight,"WEIGHT")) {
		form.wt.select();
		form.wt.focus();
		return false
	}

	if (!checkNum(height,"HEIGHT")) {
		form.ht.select();
		form.ht.focus();
		return false
	}


        if (form.sex[1].checked) {      //  Is the patient female?
                                        //  0 = male
                                        //  1 = female
                leanFactor = 1.07 
		leanConvert = 148;
		idealConvert = 45.5;	//  conversion factors for women
        } else {
                leanFactor = 1.1 
		leanConvert = 128;
		idealConvert = 50;	//  conversion factors for men
	}



		heightInches = height / 2.54;
		heightMeters = height / 100;



	var bsa = 0.20247 * Math.pow(heightMeters,0.725) *
		Math.pow(weight,0.425);
	var leanKg = (leanFactor * weight) - (leanConvert * (Math.pow(weight,2) / 
		Math.pow((100 * heightMeters),2)));
	var leanLbs = leanKg * 2.2046226;
	var idealKg = idealConvert + 2.3 * (heightInches - 60);
	var idealLbs = idealKg * 2.2046226;
	var bmi = weight / Math.pow(heightMeters,2);

	bsa = rounding(bsa,2);
	leanKg = Math.round(leanKg);
	leanLbs = Math.round(leanLbs);
	idealKg = Math.round(idealKg);
	idealLbs = Math.round(idealLbs);
	bmi = rounding(bmi,1);

    

	if (bmi < 19) {
		var interp = object_name.interp1 
        var txtbody = object_name.txtbody1
	} else {
		if (bmi < 25.0) {
            var interp = object_name.interp2 
            var txtbody = object_name.txtbody2
		} 

        if (bmi < 29.9) {
            var interp = object_name.interp3 
            var txtbody = object_name.txtbody1
        } 

        if (bmi < 30) {
            var interp = object_name.interp4 
            var txtbody = object_name.txtbody3
        } 

        if (bmi < 35) {
            var interp = object_name.interp5 
            var txtbody = object_name.txtbody4
        } 

        if (bmi < 40) {
            var interp = object_name.interp6 
            var txtbody = object_name.txtbody5
        } else {
            var interp = object_name.interp7 
            var txtbody = object_name.txtbody5
        }

	}

    // form.bsa.value = bsa;
    // form.leanKg.value = leanKg;
    // form.idealKg.value = idealKg;
    form.bmi.value = bmi;

	form.interp.value = interp;
	form.txtbody.value = txtbody;

	return true
}


function checkNum(val,text) {
    if ((val == null) || (isNaN(val)) || (val == "") || (val < 0)) {
    alert(object_name.info );
        return false
    }
    return true;
}

function rounding(number,decimal) {
	multiplier = Math.pow(10,decimal);
	number = Math.round(number * multiplier) / multiplier;
        return number
}