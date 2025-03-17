<?php declare(strict_types=1);

namespace Nadyita\PHPStan\Rules\Error;

use PHPStan\Rules\IdentifierRuleError;
use PHPStan\Rules\LineRuleError;
use PHPStan\Rules\RuleError;

class UseAsyncFunctionRuleError implements RuleError, LineRuleError, IdentifierRuleError {
	public function __construct(
		private string $message,
		private int $line
	) {
	}

	public function getMessage(): string {
		return $this->message;
	}

	public function getLine(): int {
		return $this->line;
	}

	public function getIdentifier(): string {
		return 'amphpAsyncFile';
	}
}