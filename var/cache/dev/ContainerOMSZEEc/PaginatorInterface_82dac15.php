<?php

namespace ContainerOMSZEEc;
include_once \dirname(__DIR__, 4).'/vendor/knplabs/knp-components/src/Knp/Component/Pager/PaginatorInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/knplabs/knp-components/src/Knp/Component/Pager/Paginator.php';

class PaginatorInterface_82dac15 implements \ProxyManager\Proxy\VirtualProxyInterface, \Knp\Component\Pager\PaginatorInterface
{
    /**
     * @var \Knp\Component\Pager\PaginatorInterface|null wrapped object, if the proxy is initialized
     */
    private $valueHolderffa8b = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer53736 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesf80c9 = [
        
    ];

    public function paginate($target, int $page = 1, ?int $limit = null, array $options = []) : \Knp\Component\Pager\Pagination\PaginationInterface
    {
        $this->initializer53736 && ($this->initializer53736->__invoke($valueHolderffa8b, $this, 'paginate', array('target' => $target, 'page' => $page, 'limit' => $limit, 'options' => $options), $this->initializer53736) || 1) && $this->valueHolderffa8b = $valueHolderffa8b;

        if ($this->valueHolderffa8b === $returnValue = $this->valueHolderffa8b->paginate($target, $page, $limit, $options)) {
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

        $instance->initializer53736 = $initializer;

        return $instance;
    }

    public function __construct()
    {
        static $reflection;

        if (! $this->valueHolderffa8b) {
            $reflection = $reflection ?? new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');
            $this->valueHolderffa8b = $reflection->newInstanceWithoutConstructor();
        }
    }

    public function & __get($name)
    {
        $this->initializer53736 && ($this->initializer53736->__invoke($valueHolderffa8b, $this, '__get', ['name' => $name], $this->initializer53736) || 1) && $this->valueHolderffa8b = $valueHolderffa8b;

        if (isset(self::$publicPropertiesf80c9[$name])) {
            return $this->valueHolderffa8b->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderffa8b;

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

        $targetObject = $this->valueHolderffa8b;
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
        $this->initializer53736 && ($this->initializer53736->__invoke($valueHolderffa8b, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer53736) || 1) && $this->valueHolderffa8b = $valueHolderffa8b;

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderffa8b;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderffa8b;
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
        $this->initializer53736 && ($this->initializer53736->__invoke($valueHolderffa8b, $this, '__isset', array('name' => $name), $this->initializer53736) || 1) && $this->valueHolderffa8b = $valueHolderffa8b;

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderffa8b;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderffa8b;
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
        $this->initializer53736 && ($this->initializer53736->__invoke($valueHolderffa8b, $this, '__unset', array('name' => $name), $this->initializer53736) || 1) && $this->valueHolderffa8b = $valueHolderffa8b;

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderffa8b;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderffa8b;
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
        $this->initializer53736 && ($this->initializer53736->__invoke($valueHolderffa8b, $this, '__clone', array(), $this->initializer53736) || 1) && $this->valueHolderffa8b = $valueHolderffa8b;

        $this->valueHolderffa8b = clone $this->valueHolderffa8b;
    }

    public function __sleep()
    {
        $this->initializer53736 && ($this->initializer53736->__invoke($valueHolderffa8b, $this, '__sleep', array(), $this->initializer53736) || 1) && $this->valueHolderffa8b = $valueHolderffa8b;

        return array('valueHolderffa8b');
    }

    public function __wakeup()
    {
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer53736 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer53736;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer53736 && ($this->initializer53736->__invoke($valueHolderffa8b, $this, 'initializeProxy', array(), $this->initializer53736) || 1) && $this->valueHolderffa8b = $valueHolderffa8b;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderffa8b;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderffa8b;
    }
}

if (!\class_exists('PaginatorInterface_82dac15', false)) {
    \class_alias(__NAMESPACE__.'\\PaginatorInterface_82dac15', 'PaginatorInterface_82dac15', false);
}
