function sum_even_numbers(){
  var sum = 0;
  //your code here 
  for (var i=0; i<=1000; i++) {
      if (i%2==0) {
          sum = sum +i
      }
  }
  return sum; 
}

    2    function iterArr(arr) {
        var sum = 0;
        //Your code here
        for (var i=0; i<arr.length ; i++){
          sum = sum + arr[i];
        }
        return sum;
      }


3  function sum_odd_5000() {
  var sum = 0;
  for (var i= 1; i <= 5000; i++){
      if(i%2 !=0 ){ 
          sum += i;
          
      }
  }
  return sum; 
}
  4 function findMax(arr) {
    var max = arr[0];
    for (var i = 0 ; i< arr.length ; i++) {
    if (arr[i] > max){
    max = arr[i]
        
    }
  }
    return max;
  }

5 function findAvg(arr) {
  var total = 0; 
  for (var i = 0; i < arr.length ; i++){
      total += arr[i];
  }
  
  var avg = total / arr.length 
  
  return avg; 
}


6 function oddNumbers() {
  var arr = [];
 for (var i = 1; i<=50; i++){
     if (i%2 !=0){
         arr.push(i)
     }
 }
  return arr; 
}


 7 function greaterY(arr, Y) {
  var count = 0
  for (var i = 0; i<arr.length; i++){
      if (arr[i]> Y){
          count ++
      }
  }
  return count; 
}

8 function squareVal(arr) {
  //your code here 
  for (var i=0; i< arr.length; i++){
   arr[i] = arr[i] * arr[i];
   
  }
  return arr; 
}

9 function noNeg(arr) {
  //your code here 
  for (var i = 0; i<arr.length; i++){
      if (arr[i]< 0){
          arr[i]= 0
      }
  }
  return arr; 
}


10 function maxMinAvg(arr) {
  //your code here 
  var max = arr[0];
  for (var i = 0; i < arr.length; i++){
      if (arr[i]> max){
          max = arr[i];
      }
  }
  
  
  
  var min = arr[0];
  for (var i = 0; i<arr.length; i++){
      if (arr[i]< min){
          min = arr[i];
      }
  }
  
  
  
  var avg = 0;
  var total = 0;
  for (var i = 0; i<arr.length; i++){
      total += arr[i];
  }
  avg = total / arr.length
  
 var arrnew = [max,min,avg]
  
  
  
  return arrnew; 
}

12 function swap(arr) {
  //your code here 
  var temp
  var arrnew = arr
     temp = arr[0]
     arr[0] =arr[arr.length -1] 
     arr[arr.length -1] = temp

  return arrnew; 
}


13 function numToStr(arr) {
  //your code here 
  
  for (var i= 0 ; i < arr.length ; i++) {
      if(arr[i] < 0) {
          arr[i] = 'Dojo'
      }
  }
  return arr; 
}