// Additionneur
var app1 = new Vue({

    el: '#add',

    data: {

        num1: '',

        num2: '',

        sum:''
    }
});
// End Additionneur

// Nombre Magique
let magic = parseInt(Math.random()*100);

var app2 = new Vue({
 
    el:'#app',

    data: {

        number: 0,

        message: 'Entrez un nombre!',

    },

    methods: {

        verify: function () {

            this.message = magic < this.number

                ? 'Plus petit'

                : (magic > this.number

                    ? 'Plus grand'

                    : 'BRAVO !!');

        },

        newNumber: function () {

            magic = parseInt(Math.random()*100);

            this.message = 'Entrez un nombre';

        }

    }
});
    //End Nombre Magique

    // Calculatrice
    var app3 = new Vue({

        el: '#calcul',

        data: {

            operator: '',

            number1: '',

            number2: '',

            operator: '',

            resultat: 0,

            display: 0,
        },
        
        methods: {

            reset: function() {

                this.operator = '';
                this.number1 = '';
                this.number2 = '';
                this.resultat = '0';
                this.display = '0';

            }

            getOper: function(op) {

                this.operator = op;
            }



            addNum: function(number) {

                this.display = number;

                switch (this.operator) {
                    case '+':
                        this.resultat += number;
                        break;
                    case '-':
                        this.resultat -= number;
                        break;
                    case '=':
                        this.display = this.resultat;
                        break;

                    default:
                        this.resultat = number;
                        break;
                 }
            },
        }


    });
   //End Calculatrice


