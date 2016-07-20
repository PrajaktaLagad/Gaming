function showReqDropdowns(){

	if ($(this).val()) {

	$('#reqDropdowns').show();

	}
}


function getResults(){
	var gameId = $('#select-game').val();
	var specs = $('.reqDropdowns');
	var specIds = [], i, canIRunIt = true;
	var minimumReqs = requirements[gameId]; //gameId parameter hold the game value
	specs.each(function(){
		specIds.push(parseInt($(this).val())); //to fetch values from reqDropdowns and put in specIDS
	});
	for(i =0;i<minimumReqs.length;i++){
		if(specIds[i] < minimumReqs[i]){
			canIRunIt = false;
			break;
		}
	}
	if(canIRunIt === false)
		$('#msg').text('Sorry your specs do not meet the minimum requirements for this game.');
	if(canIRunIt === true)
		$('#msg').text('Congratulations! You can run it!');

}

var requirements = {
	1:[2, 3, 2],
	2:[2, 3, 3],
	3:[3, 2, 3],
	4:[3, 3, 3]
};