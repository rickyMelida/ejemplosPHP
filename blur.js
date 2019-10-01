document.getElementById('dato2').addEventListener('blur', function() {
		alert('sale');
	}); 


	function validar() {
		var dato_1 = parseInt(document.getElementById('dato1').value);
		var dato_2 = parseInt(document.getElementById('dato2').value);

		var cond1 = document.getElementById('dato1').value;
		var cond2 = document.getElementById('dato2').value;

        
        if (cond1.length == 0 || /^\s+$/.test(cond1) || cond2.length == 0 || /^\s+$/.test(cond2)) {
            document.getElementById('res').value = 'Esta vacio';
            document.getElementById('res').disabled = true;
        }else {
            document.getElementById('res').value = 'sale ' + (dato_1 + dato_2);
            document.getElementById('res').disabled = true;

        }
        
    }