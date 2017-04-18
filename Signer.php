<?php
namespace Dfe\Tinkoff;
/**
 * 2017-04-18
 * @see \Dfe\Tinkoff\Signer\Request
 * @see \Dfe\Tinkoff\Signer\Response
 * @method Settings s()
 */
abstract class Signer extends \Df\PaypalClone\Signer {
	/**
	 * 2017-04-18
	 * @used-by sign()
	 * @see \Dfe\Tinkoff\Signer\Request::values()
	 * @see \Dfe\Tinkoff\Signer\Response::values()
	 * @return string[]
	 */
	abstract protected function values();

	/**
	 * 2017-04-18
	 * @override
	 * @see \Df\PaypalClone\Signer::sign()
	 * @return string
	 */
	final protected function sign() {return implode($this->values());}
}