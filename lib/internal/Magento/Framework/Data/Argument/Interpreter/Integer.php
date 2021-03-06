<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Magento\Framework\Data\Argument\Interpreter;

use Magento\Framework\Data\Argument\InterpreterInterface;

/**
 * Interpreter of numeric data, such as integer or float
 */
class Integer implements InterpreterInterface
{
    /**
     * {@inheritdoc}
     * @return int|float
     * @throws \InvalidArgumentException
     */
    public function evaluate(array $data)
    {
        if (!isset($data['value']) || !is_numeric($data['value'])) {
            throw new \InvalidArgumentException('Numeric value is expected.');
        }
        $result = $data['value'];
        return (int)$result;
    }
}
