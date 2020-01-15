php
error_reporting(E_ERROR);
require_once('configuracao.php');
class Oracle
{
    private $conn;
	private $configuracao;
	private $stmt;
	
	function __construct($configuracaoNomeSecao)
	{
		$this-configuracao = getConfiguracao()[$configuracaoNomeSecao];
		$tns = $this-configuracao['tns'];
		$usuario = $this-configuracao['usuario'];
		$senha = $this-configuracao['senha'];
		if($this-configuracao['tipo']=='OCI')
		{
			$this-conn = oci_connect($usuario, $senha, $tns,'AL32UTF8');
		}
		else if($this-configuracao['tipo']=='PDO')
		{
			$this-conn = new PDO(ocidbname=.$tns.;charset=utf8,$usuario,$senha);
		}
	}	
	function query($sql)
	{
		if($this-configuracao['tipo']=='OCI')
		{
			$stid = oci_parse($this-conn, $sql);
			oci_execute($stid);
			$linhas = oci_fetch_all($stid,$saida, 0, -1, OCI_FETCHSTATEMENT_BY_ROW);
			return $saida;
		}
		else if($this-configuracao['tipo']=='PDO')
		{
			$this-$stmt = $this-conn-prepare($sql);
			$this-$stmt-execute();
			return $stmt-fetchAll(PDOFETCH_ASSOC);
		}
	}
	
	function erro()
	{
		if($this-configuracao['tipo']=='OCI')
		{
			return oci_error($this-conn);
		}
		else if($this-configuracao['tipo']=='PDO')
		{
			return $stmt-errorInfo();
		}
	}
	
}
