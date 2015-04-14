<?php
namespace Mrix\Rql\Parser\TokenParser\Query;

use Mrix\Rql\Parser\Token;
use Mrix\Rql\Parser\AbstractTokenParser;
use Mrix\Rql\Parser\TokenParser\QueryTokenParser;

/**
 */
abstract class AbstractQueryOperatorTokenParser extends AbstractTokenParser
{
    /**
     * @var QueryTokenParser
     */
    protected $queryTokenParser;

    /**
     * @param QueryTokenParser $queryTokenParser
     */
    public function __construct(QueryTokenParser $queryTokenParser)
    {
        $this->queryTokenParser = $queryTokenParser;
    }

    /**
     * @inheritdoc
     */
    public function supports(Token $token)
    {
        return $token->test(Token::T_QUERY_OPERATOR, $this->getOperatorName());
    }

    /**
     * @return string
     */
    abstract protected function getOperatorName();
}