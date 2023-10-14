<?


function CalcularValorFinal($valoruni, $quantidade)
{
    if ($valoruni == '' || $quantidade == '') {
        return 0;
    }

    $res = ($valoruni * $quantidade);

    return $res;
}
