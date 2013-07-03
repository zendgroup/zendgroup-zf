<?php
namespace ZG;

class Text {
	/**
	 * Pattern of the string
	 * @var string
	 */
	private $message;
	/**
	 * An array of arguments to fill in the pattern
	 * @var array
	 */
	private $arguments;
	
	/**
	 * @param Zwas_Text | string $message String of text where '?' mark is a place holder for the following arguments
	 * @param array $arguments Array of arguments that should be placed in the provided string, replacing the '?' mark (same order)
	 */
	public function __construct($message, $arguments = array()) {
		$this->message		= $message;
		$this->arguments	= $arguments;
	}

	/**
	 * Returns the message string
	 * @return string
	 */
	public function getMessage() {
		return $this->message;
	}

	/**
	 * Returns the message arguments
	 * @return array
	 */
	public function getArguments() {
		return $this->arguments;
	}

	/**
	 * Convert message to the string  - replace all arguments in message
	 *
	 * @return string
	 */
	public function __toString() {
		$arguments = $this->getArguments();

		$msg = $this->getMessage();
		
		if (count($arguments)) {
			// in order to avoid strings having other flags which may match the vprintf
			// such as %d or %3C which in encoded URL is <
			$msg = strtr($msg, array('%%s' => '%%s', '%s' => '%s', '%' => '%%'));
		}
		
		// Handle the case when there are too few arguments passed, in which case vprintf will fail
		$string = vsprintf($msg, $arguments);
		return (false === $string) ? '' : $string;
	}
	
}