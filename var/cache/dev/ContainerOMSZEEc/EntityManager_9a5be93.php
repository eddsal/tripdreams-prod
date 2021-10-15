<?php

namespace ContainerOMSZEEc;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
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

    public function getConnection()
    {
        $this->initializer53736 && ($this->initializer53736->__invoke($valueHolderffa8b, $this, 'getConnection', array(), $this->initializer53736) || 1) && $this->valueHolderffa8b = $valueHolderffa8b;

        return $this->valueHolderffa8b->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer53736 && ($this->initializer53736->__invoke($valueHolderffa8b, $this, 'getMetadataFactory', array(), $this->initializer53736) || 1) && $this->valueHolderffa8b = $valueHolderffa8b;

        return $this->valueHolderffa8b->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer53736 && ($this->initializer53736->__invoke($valueHolderffa8b, $this, 'getExpressionBuilder', array(), $this->initializer53736) || 1) && $this->valueHolderffa8b = $valueHolderffa8b;

        return $this->valueHolderffa8b->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer53736 && ($this->initializer53736->__invoke($valueHolderffa8b, $this, 'beginTransaction', array(), $this->initializer53736) || 1) && $this->valueHolderffa8b = $valueHolderffa8b;

        return $this->valueHolderffa8b->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer53736 && ($this->initializer53736->__invoke($valueHolderffa8b, $this, 'getCache', array(), $this->initializer53736) || 1) && $this->valueHolderffa8b = $valueHolderffa8b;

        return $this->valueHolderffa8b->getCache();
    }

    public function transactional($func)
    {
        $this->initializer53736 && ($this->initializer53736->__invoke($valueHolderffa8b, $this, 'transactional', array('func' => $func), $this->initializer53736) || 1) && $this->valueHolderffa8b = $valueHolderffa8b;

        return $this->valueHolderffa8b->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer53736 && ($this->initializer53736->__invoke($valueHolderffa8b, $this, 'wrapInTransaction', array('func' => $func), $this->initializer53736) || 1) && $this->valueHolderffa8b = $valueHolderffa8b;

        return $this->valueHolderffa8b->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer53736 && ($this->initializer53736->__invoke($valueHolderffa8b, $this, 'commit', array(), $this->initializer53736) || 1) && $this->valueHolderffa8b = $valueHolderffa8b;

        return $this->valueHolderffa8b->commit();
    }

    public function rollback()
    {
        $this->initializer53736 && ($this->initializer53736->__invoke($valueHolderffa8b, $this, 'rollback', array(), $this->initializer53736) || 1) && $this->valueHolderffa8b = $valueHolderffa8b;

        return $this->valueHolderffa8b->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer53736 && ($this->initializer53736->__invoke($valueHolderffa8b, $this, 'getClassMetadata', array('className' => $className), $this->initializer53736) || 1) && $this->valueHolderffa8b = $valueHolderffa8b;

        return $this->valueHolderffa8b->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer53736 && ($this->initializer53736->__invoke($valueHolderffa8b, $this, 'createQuery', array('dql' => $dql), $this->initializer53736) || 1) && $this->valueHolderffa8b = $valueHolderffa8b;

        return $this->valueHolderffa8b->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer53736 && ($this->initializer53736->__invoke($valueHolderffa8b, $this, 'createNamedQuery', array('name' => $name), $this->initializer53736) || 1) && $this->valueHolderffa8b = $valueHolderffa8b;

        return $this->valueHolderffa8b->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer53736 && ($this->initializer53736->__invoke($valueHolderffa8b, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer53736) || 1) && $this->valueHolderffa8b = $valueHolderffa8b;

        return $this->valueHolderffa8b->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer53736 && ($this->initializer53736->__invoke($valueHolderffa8b, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer53736) || 1) && $this->valueHolderffa8b = $valueHolderffa8b;

        return $this->valueHolderffa8b->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer53736 && ($this->initializer53736->__invoke($valueHolderffa8b, $this, 'createQueryBuilder', array(), $this->initializer53736) || 1) && $this->valueHolderffa8b = $valueHolderffa8b;

        return $this->valueHolderffa8b->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer53736 && ($this->initializer53736->__invoke($valueHolderffa8b, $this, 'flush', array('entity' => $entity), $this->initializer53736) || 1) && $this->valueHolderffa8b = $valueHolderffa8b;

        return $this->valueHolderffa8b->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer53736 && ($this->initializer53736->__invoke($valueHolderffa8b, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer53736) || 1) && $this->valueHolderffa8b = $valueHolderffa8b;

        return $this->valueHolderffa8b->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer53736 && ($this->initializer53736->__invoke($valueHolderffa8b, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer53736) || 1) && $this->valueHolderffa8b = $valueHolderffa8b;

        return $this->valueHolderffa8b->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer53736 && ($this->initializer53736->__invoke($valueHolderffa8b, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer53736) || 1) && $this->valueHolderffa8b = $valueHolderffa8b;

        return $this->valueHolderffa8b->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer53736 && ($this->initializer53736->__invoke($valueHolderffa8b, $this, 'clear', array('entityName' => $entityName), $this->initializer53736) || 1) && $this->valueHolderffa8b = $valueHolderffa8b;

        return $this->valueHolderffa8b->clear($entityName);
    }

    public function close()
    {
        $this->initializer53736 && ($this->initializer53736->__invoke($valueHolderffa8b, $this, 'close', array(), $this->initializer53736) || 1) && $this->valueHolderffa8b = $valueHolderffa8b;

        return $this->valueHolderffa8b->close();
    }

    public function persist($entity)
    {
        $this->initializer53736 && ($this->initializer53736->__invoke($valueHolderffa8b, $this, 'persist', array('entity' => $entity), $this->initializer53736) || 1) && $this->valueHolderffa8b = $valueHolderffa8b;

        return $this->valueHolderffa8b->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer53736 && ($this->initializer53736->__invoke($valueHolderffa8b, $this, 'remove', array('entity' => $entity), $this->initializer53736) || 1) && $this->valueHolderffa8b = $valueHolderffa8b;

        return $this->valueHolderffa8b->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer53736 && ($this->initializer53736->__invoke($valueHolderffa8b, $this, 'refresh', array('entity' => $entity), $this->initializer53736) || 1) && $this->valueHolderffa8b = $valueHolderffa8b;

        return $this->valueHolderffa8b->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer53736 && ($this->initializer53736->__invoke($valueHolderffa8b, $this, 'detach', array('entity' => $entity), $this->initializer53736) || 1) && $this->valueHolderffa8b = $valueHolderffa8b;

        return $this->valueHolderffa8b->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer53736 && ($this->initializer53736->__invoke($valueHolderffa8b, $this, 'merge', array('entity' => $entity), $this->initializer53736) || 1) && $this->valueHolderffa8b = $valueHolderffa8b;

        return $this->valueHolderffa8b->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer53736 && ($this->initializer53736->__invoke($valueHolderffa8b, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer53736) || 1) && $this->valueHolderffa8b = $valueHolderffa8b;

        return $this->valueHolderffa8b->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer53736 && ($this->initializer53736->__invoke($valueHolderffa8b, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer53736) || 1) && $this->valueHolderffa8b = $valueHolderffa8b;

        return $this->valueHolderffa8b->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer53736 && ($this->initializer53736->__invoke($valueHolderffa8b, $this, 'getRepository', array('entityName' => $entityName), $this->initializer53736) || 1) && $this->valueHolderffa8b = $valueHolderffa8b;

        return $this->valueHolderffa8b->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer53736 && ($this->initializer53736->__invoke($valueHolderffa8b, $this, 'contains', array('entity' => $entity), $this->initializer53736) || 1) && $this->valueHolderffa8b = $valueHolderffa8b;

        return $this->valueHolderffa8b->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer53736 && ($this->initializer53736->__invoke($valueHolderffa8b, $this, 'getEventManager', array(), $this->initializer53736) || 1) && $this->valueHolderffa8b = $valueHolderffa8b;

        return $this->valueHolderffa8b->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer53736 && ($this->initializer53736->__invoke($valueHolderffa8b, $this, 'getConfiguration', array(), $this->initializer53736) || 1) && $this->valueHolderffa8b = $valueHolderffa8b;

        return $this->valueHolderffa8b->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer53736 && ($this->initializer53736->__invoke($valueHolderffa8b, $this, 'isOpen', array(), $this->initializer53736) || 1) && $this->valueHolderffa8b = $valueHolderffa8b;

        return $this->valueHolderffa8b->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer53736 && ($this->initializer53736->__invoke($valueHolderffa8b, $this, 'getUnitOfWork', array(), $this->initializer53736) || 1) && $this->valueHolderffa8b = $valueHolderffa8b;

        return $this->valueHolderffa8b->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer53736 && ($this->initializer53736->__invoke($valueHolderffa8b, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer53736) || 1) && $this->valueHolderffa8b = $valueHolderffa8b;

        return $this->valueHolderffa8b->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer53736 && ($this->initializer53736->__invoke($valueHolderffa8b, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer53736) || 1) && $this->valueHolderffa8b = $valueHolderffa8b;

        return $this->valueHolderffa8b->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer53736 && ($this->initializer53736->__invoke($valueHolderffa8b, $this, 'getProxyFactory', array(), $this->initializer53736) || 1) && $this->valueHolderffa8b = $valueHolderffa8b;

        return $this->valueHolderffa8b->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer53736 && ($this->initializer53736->__invoke($valueHolderffa8b, $this, 'initializeObject', array('obj' => $obj), $this->initializer53736) || 1) && $this->valueHolderffa8b = $valueHolderffa8b;

        return $this->valueHolderffa8b->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer53736 && ($this->initializer53736->__invoke($valueHolderffa8b, $this, 'getFilters', array(), $this->initializer53736) || 1) && $this->valueHolderffa8b = $valueHolderffa8b;

        return $this->valueHolderffa8b->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer53736 && ($this->initializer53736->__invoke($valueHolderffa8b, $this, 'isFiltersStateClean', array(), $this->initializer53736) || 1) && $this->valueHolderffa8b = $valueHolderffa8b;

        return $this->valueHolderffa8b->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer53736 && ($this->initializer53736->__invoke($valueHolderffa8b, $this, 'hasFilters', array(), $this->initializer53736) || 1) && $this->valueHolderffa8b = $valueHolderffa8b;

        return $this->valueHolderffa8b->hasFilters();
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

        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);

        $instance->initializer53736 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolderffa8b) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderffa8b = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderffa8b->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer53736 && ($this->initializer53736->__invoke($valueHolderffa8b, $this, '__get', ['name' => $name], $this->initializer53736) || 1) && $this->valueHolderffa8b = $valueHolderffa8b;

        if (isset(self::$publicPropertiesf80c9[$name])) {
            return $this->valueHolderffa8b->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

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

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

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

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

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

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

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
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
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

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
