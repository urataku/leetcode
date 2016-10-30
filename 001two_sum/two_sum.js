/**
 * @param {number[]} nums
 * @param {number} target
 * @return {number[]}
 */
var twoSum = function(nums, target) {
	for(i=0;i < nums.length-1;i++){
		for(j=i+1;j < nums.length;j++){
			k = nums[i] + nums[j];
			if(k == target){
				return [i,j];
			}
		}
	}
	return [];
};