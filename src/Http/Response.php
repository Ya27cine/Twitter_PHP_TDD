<?php 

namespace Twitter\Http;

class Response{
    private  string $content;
    private array $headers;
    private int $status;

    public function __construct(string $content ,array  $headers = [], int $status = 200)
    {
        $this->content = $content;
        $this->status  = $status;
        $this->headers = $headers;
    }

	public function send() : void {
		foreach($this->getHeaders() as $key => $value)
		 	header("$key : $value");
		echo $this->getContent();
		http_response_code( $this->getStatus() );
	}
    
	/**
	 * 
	 * @return string
	 */
	function getContent(): string {
		return $this->content;
	}
	
	/**
	 * 
	 * @param string $content 
	 * @return Response
	 */
	function setContent(string $content): self {
		$this->content = $content;
		return $this;
	}
	
	/**
	 * 
	 * @return array
	 */
	function getHeaders(): array {
		return $this->headers;
	}
	
	/**
	 * 
	 * @param array $headers 
	 * @return Response
	 */
	function setHeaders(array $headers): self {
		$this->headers = $headers;
		return $this;
	}
	
	/**
	 * 
	 * @return int
	 */
	function getStatus(): int {
		return $this->status;
	}
	
	/**
	 * 
	 * @param int $status 
	 * @return Response
	 */
	function setStatus(int $status): self {
		$this->status = $status;
		return $this;
	}
}
?>