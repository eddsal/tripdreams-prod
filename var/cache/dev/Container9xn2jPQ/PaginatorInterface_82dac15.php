<?php

namespace Container9xn2jPQ;
include_once \dirname(__DIR__, 4).'/vendor/knplabs/knp-components/src/Knp/Component/Pager/PaginatorInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/knplabs/knp-components/src/Knp/Component/Pager/Paginator.php';

class PaginatorInterface_82dac15 implements \ProxyManager\Proxy\VirtualProxyInterface, \Knp\Component\Pager\PaginatorInterface
{
    /**
     * @var \Knp\Component\Pager\PaginatorInterface|null wrapped object, if the proxy is initialized
     */
    private $valueHolder313cb = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer39b63 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiese99e1 = [
        
    ];

    public function paginate($target, int $page = 1, ?int $limit = null, array $options = []) : \Knp\Component\Pager\Pagination\PaginationInterface
    {
        $this->initializer39b63 && ($this->initializer39b63->__invoke($valueHolder313cb, $this, 'paginate', array('target' => $target, 'page' => $page, 'limit' => $limit, 'options' => $options), $this->initializer39b63) || 1) && $this->valueHolder313cb = $valueHolder313cb;

        if ($this->valueHolder313cb === $returnValue = $this->valueHolder313cb->paginate($target, $page, $limit, $options)) {
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

        $instance->initializer39b63 = $initializer;

        return $instance;
    }

    public function __construct()
    {
        static $reflection;

        if (! $this->valueHolder313cb) {
            $reflection = $reflection ?? new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');
            $this->valueHolder313cb = $reflection->newInstanceWithoutConstructor();
        }
    }

    public function & __get($name)
    {
        $this->initializer39b63 && ($this->initializer39b63->__invoke($valueHolder313cb, $this, '__get', ['name' => $name], $this->initializer39b63) || 1) && $this->valueHolder313cb = $valueHolder313cb;

        if (isset(self::$publicPropertiese99e1[$name])) {
            return $this->valueHolder313cb->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder313cb;

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

        $targetObject = $this->valueHolder313cb;
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
        $this->initializer39b63 && ($this->initializer39b63->__invoke($valueHolder313cb, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer39b63) || 1) && $this->valueHolder313cb = $valueHolder313cb;

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder313cb;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder313cb;
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
        $this->initializer39b63 && ($this->initializer39b63->__invoke($valueHolder313cb, $this, '__isset', array('name' => $name), $this->initializer39b63) || 1) && $this->valueHolder313cb = $valueHolder313cb;

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder313cb;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder313cb;
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
        $this->initializer39b63 && ($this->initializer39b63->__invoke($valueHolder313cb, $this, '__unset', array('name' => $name), $this->initializer39b63) || 1) && $this->valueHolder313cb = $valueHolder313cb;

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder313cb;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder313cb;
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
        $this->initializer39b63 && ($this->initializer39b63->__invoke($valueHolder313cb, $this, '__clone', array(), $this->initializer39b63) || 1) && $this->valueHolder313cb = $valueHolder313cb;

        $this->valueHolder313cb = clone $this->valueHolder313cb;
    }

    public function __sleep()
    {
        $this->initializer39b63 && ($this->initializer39b63->__invoke($valueHolder313cb, $this, '__sleep', array(), $this->initializer39b63) || 1) && $this->valueHolder313cb = $valueHolder313cb;

        return array('valueHolder313cb');
    }

    public function __wakeup()
    {
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer39b63 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer39b63;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer39b63 && ($this->initializer39b63->__invoke($valueHolder313cb, $this, 'initializeProxy', array(), $this->initializer39b63) || 1) && $this->valueHolder313cb = $valueHolder313cb;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder313cb;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder313cb;
    }
}

if (!\class_exists('PaginatorInterface_82dac15', false)) {
    \class_alias(__NAMESPACE__.'\\PaginatorInterface_82dac15', 'PaginatorInterface_82dac15', false);
}
