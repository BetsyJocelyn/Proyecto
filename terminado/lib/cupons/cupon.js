<script>
var cantidad, precio, desc, compra, pagar;
    
    precio = parseFloat(prompt("Ingrersar precio"));
    cantidad = parseFloat(prompt("Ingrersar cantidad"));
    
    compra = precio*cantidad;
    desc = compra*0.15;
    pagar = compra-desc;
    
    document.write("El descuento es: "+desc);
    document.write("Total a pagar: "+pagar);
</script>