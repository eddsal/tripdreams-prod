<?php

namespace Container1dTM1Mx;
include_once \dirname(__DIR__, 4).'/vendor/knplabs/knp-components/src/Knp/Component/Pager/PaginatorInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/knplabs/knp-components/src/Knp/Component/Pager/Paginator.php';

class PaginatorInterface_82dac15 implements \ProxyManager\Proxy\VirtualProxyInterface, \Knp\Component\Pager\PaginatorInterface
{
    /**
     * @var \Knp\Component\Pager\PaginatorInterface|null wrapped object, if the proxy is initialized
     */
    private $valueHolderaf940 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer674e5 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiese5223 = [
        
    ];

    public function paginate($target, int $page = 1, ?int $limit = null, array $options = []) : \Knp\Component\Pager\Pagination\PaginationInterface
    {
        $this->initializer674e5 && ($this->initializer674e5->__invoke($valueHolderaf940, $this, 'paginate', array('target' => $target, 'page' => $page, 'limit' => $limit, 'options' => $options), $this->initializer674e5) || 1) && $this->valueHolderaf940 = $valueHolderaf940;

        if ($this->valueHolderaf940 === $returnValue = $this->valueHolderaf940->paginate($target, $page, $limit, $options)) {
            return $this;
        }

        return $returnValue;
    }

    /**
     * Constructor for lazy initialization
     *
     * @param \Closure|null $initializer
     */
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;

        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();

        $instance->initializer674e5 = $initializer;

        return $instance;
    }

    public function __construct()
    {
        static $reflection;

        if (! $this->valueHolderaf940) {
            $reflection = $reflection ?? new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');
            $this->valueHolderaf940 = $reflection->newInstanceWithoutConstructor();
        }
    }

    public function & __get($name)
    {
        $this->initializer674e5 && ($this->initializer674e5->__invoke($valueHolderaf940, $this, '__get', ['name' => $name], $this->initializer674e5) || 1) && $this->valueHolderaf940 = $valueHolderaf940;

        if (isset(self::$publicPropertiese5223[$name])) {
            return $this->valueHolderaf940->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderaf940;

            $backtrace = debug_backtrace(false, 1);
            trigger_error(
                sprintf(
                    'Undefined property: %s::$%s in %s on line %s',
                    $realInstanceReflection->getName(),
                    $name,
                    $backtrace[0]['file'],
                    $backtrace[0]['line']
                ),
                \E_USER_NOTICE
            );
            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderaf940;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __set($name, $value)
    {
        $this->initializer674e5 && ($this->initializer674e5->__invoke($valueHolderaf940, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer674e5) || 1) && $this->valueHolderaf940 = $valueHolderaf940;

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderaf940;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderaf940;
        $accessor = function & () use ($targetObject, $name, $value) {
            $targetObject->$name = $value;

            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __isset($name)
    {
        $this->initializer674e5 && ($this->initializer674e5->__invoke($valueHolderaf940, $this, '__isset', array('name' => $name), $this->initializer674e5) || 1) && $this->valueHolderaf940 = $valueHolderaf940;

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderaf940;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderaf940;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();

        return $returnValue;
    }

    public function __unset($name)
    {
        $this->initializer674e5 && ($this->initializer674e5->__invoke($valueHolderaf940, $this, '__unset', array('name' => $name), $this->initializer674e5) || 1) && $this->valueHolderaf940 = $valueHolderaf940;

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderaf940;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderaf940;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);

            return;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $accessor();
    }

    public function __clone()
    {
        $this->initializer674e5 && ($this->initializer674e5->__invoke($valueHolderaf940, $this, '__clone', array(), $this->initializer674e5) || 1) && $this->valueHolderaf940 = $valueHolderaf940;

        $this->valueHolderaf940 = clone $this->valueHolderaf940;
    }

    public function __sleep()
    {
        $this->initializer674e5 && ($this->initializer674e5->__invoke($valueHolderaf940, $this, '__sleep', array(), $this->initializer674e5) || 1) && $this->valueHolderaf940 = $valueHolderaf940;

        return array('valueHolderaf940');
    }

    public function __wakeup()
    {
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer674e5 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer674e5;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer674e5 && ($this->initializer674e5->__invoke($valueHolderaf940, $this, 'initializeProxy', array(), $this->initializer674e5) || 1) && $this->valueHolderaf940 = $valueHolderaf940;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderaf940;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderaf940;
    }
}

if (!\class_exists('PaginatorInterface_82dac15', false)) {
    \class_alias(__NAMESPACE__.'\\PaginatorInterface_82dac15', 'PaginatorInterface_82dac15', false);
}
