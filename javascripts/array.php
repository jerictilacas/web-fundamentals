<script>
    var value = [60, 40 , "mouse", "house"];

    for (var i = 0; i < 4 ; i ++){
        console.log(value[i]);
    }

</script>
<script>
    var player1 = { name: "fred" , score: 10000, rank: 1}
    var player2 = { name: "sam" , score: 1000000, rank: 5}
    function playerDetails(){
        console.log(this.name + " has a rank of:" + this.rank +
            "and a score of" + this.score);
    }
    player1.logDetails = playerDetails;
    player2.logDetails = playerDetails;

    player1.logDetails();
    player2.logDetails();
</script>