<?php
namespace Dfe\Tinkoff\Signer;
// 2017-04-18
final class Request extends \Dfe\Tinkoff\Signer {
	/**
	 * 2017-04-18
	 * @override
	 * @see \Dfe\Tinkoff\Signer::values()
	 * @used-by \Dfe\Tinkoff\Signer::sign()
	 * @return string[]
	 */
	protected function values() {return dfa_select_ordered($this->v(), []);}
}