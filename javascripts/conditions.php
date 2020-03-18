<script>
    var amount = 10000;
    if (amount < 1000){
        alert('the amount is less than 1000');
    } else {
        alert('the amount is great than 1000');
    }
</script>
<script>
    // operators and signs
    // = (assignment)
    var a = 5;
    var b = '5';
    // == (equality)
    // === (strictly equal)
    if (a === b) {
        alert('they are equal');
    }else {
        alert('they are not equal');
    }
//or
    (a == b)? alert('they are equal'): alert('they are not equal');
    var playerone = 610;
    var playertwo = 600;
    var highscore = (playerone < playertwo)? playertwo: playerone;
    alert(highscore);
</script>
<script>
    var foo = 10;
    var bar = 20;
    if (foo < bar) {
        console.log('foo is less than bar');
        console.log('second message');
        console.log('third message');
        console.debug('third message');
        console.info('third message');
        console.warn('third message');
        console.error('third message');
    }
</script>