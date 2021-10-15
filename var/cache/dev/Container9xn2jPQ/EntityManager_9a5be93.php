<?php

namespace Container9xn2jPQ;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
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

    public function getConnection()
    {
        $this->initializer39b63 && ($this->initializer39b63->__invoke($valueHolder313cb, $this, 'getConnection', array(), $this->initializer39b63) || 1) && $this->valueHolder313cb = $valueHolder313cb;

        return $this->valueHolder313cb->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer39b63 && ($this->initializer39b63->__invoke($valueHolder313cb, $this, 'getMetadataFactory', array(), $this->initializer39b63) || 1) && $this->valueHolder313cb = $valueHolder313cb;

        return $this->valueHolder313cb->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer39b63 && ($this->initializer39b63->__invoke($valueHolder313cb, $this, 'getExpressionBuilder', array(), $this->initializer39b63) || 1) && $this->valueHolder313cb = $valueHolder313cb;

        return $this->valueHolder313cb->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer39b63 && ($this->initializer39b63->__invoke($valueHolder313cb, $this, 'beginTransaction', array(), $this->initializer39b63) || 1) && $this->valueHolder313cb = $valueHolder313cb;

        return $this->valueHolder313cb->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer39b63 && ($this->initializer39b63->__invoke($valueHolder313cb, $this, 'getCache', array(), $this->initializer39b63) || 1) && $this->valueHolder313cb = $valueHolder313cb;

        return $this->valueHolder313cb->getCache();
    }

    public function transactional($func)
    {
        $this->initializer39b63 && ($this->initializer39b63->__invoke($valueHolder313cb, $this, 'transactional', array('func' => $func), $this->initializer39b63) || 1) && $this->valueHolder313cb = $valueHolder313cb;

        return $this->valueHolder313cb->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer39b63 && ($this->initializer39b63->__invoke($valueHolder313cb, $this, 'wrapInTransaction', array('func' => $func), $this->initializer39b63) || 1) && $this->valueHolder313cb = $valueHolder313cb;

        return $this->valueHolder313cb->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer39b63 && ($this->initializer39b63->__invoke($valueHolder313cb, $this, 'commit', array(), $this->initializer39b63) || 1) && $this->valueHolder313cb = $valueHolder313cb;

        return $this->valueHolder313cb->commit();
    }

    public function rollback()
    {
        $this->initializer39b63 && ($this->initializer39b63->__invoke($valueHolder313cb, $this, 'rollback', array(), $this->initializer39b63) || 1) && $this->valueHolder313cb = $valueHolder313cb;

        return $this->valueHolder313cb->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer39b63 && ($this->initializer39b63->__invoke($valueHolder313cb, $this, 'getClassMetadata', array('className' => $className), $this->initializer39b63) || 1) && $this->valueHolder313cb = $valueHolder313cb;

        return $this->valueHolder313cb->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer39b63 && ($this->initializer39b63->__invoke($valueHolder313cb, $this, 'createQuery', array('dql' => $dql), $this->initializer39b63) || 1) && $this->valueHolder313cb = $valueHolder313cb;

        return $this->valueHolder313cb->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer39b63 && ($this->initializer39b63->__invoke($valueHolder313cb, $this, 'createNamedQuery', array('name' => $name), $this->initializer39b63) || 1) && $this->valueHolder313cb = $valueHolder313cb;

        return $this->valueHolder313cb->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer39b63 && ($this->initializer39b63->__invoke($valueHolder313cb, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer39b63) || 1) && $this->valueHolder313cb = $valueHolder313cb;

        return $this->valueHolder313cb->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer39b63 && ($this->initializer39b63->__invoke($valueHolder313cb, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer39b63) || 1) && $this->valueHolder313cb = $valueHolder313cb;

        return $this->valueHolder313cb->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer39b63 && ($this->initializer39b63->__invoke($valueHolder313cb, $this, 'createQueryBuilder', array(), $this->initializer39b63) || 1) && $this->valueHolder313cb = $valueHolder313cb;

        return $this->valueHolder313cb->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer39b63 && ($this->initializer39b63->__invoke($valueHolder313cb, $this, 'flush', array('entity' => $entity), $this->initializer39b63) || 1) && $this->valueHolder313cb = $valueHolder313cb;

        return $this->valueHolder313cb->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer39b63 && ($this->initializer39b63->__invoke($valueHolder313cb, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer39b63) || 1) && $this->valueHolder313cb = $valueHolder313cb;

        return $this->valueHolder313cb->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer39b63 && ($this->initializer39b63->__invoke($valueHolder313cb, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer39b63) || 1) && $this->valueHolder313cb = $valueHolder313cb;

        return $this->valueHolder313cb->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer39b63 && ($this->initializer39b63->__invoke($valueHolder313cb, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer39b63) || 1) && $this->valueHolder313cb = $valueHolder313cb;

        return $this->valueHolder313cb->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer39b63 && ($this->initializer39b63->__invoke($valueHolder313cb, $this, 'clear', array('entityName' => $entityName), $this->initializer39b63) || 1) && $this->valueHolder313cb = $valueHolder313cb;

        return $this->valueHolder313cb->clear($entityName);
    }

    public function close()
    {
        $this->initializer39b63 && ($this->initializer39b63->__invoke($valueHolder313cb, $this, 'close', array(), $this->initializer39b63) || 1) && $this->valueHolder313cb = $valueHolder313cb;

        return $this->valueHolder313cb->close();
    }

    public function persist($entity)
    {
        $this->initializer39b63 && ($this->initializer39b63->__invoke($valueHolder313cb, $this, 'persist', array('entity' => $entity), $this->initializer39b63) || 1) && $this->valueHolder313cb = $valueHolder313cb;

        return $this->valueHolder313cb->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer39b63 && ($this->initializer39b63->__invoke($valueHolder313cb, $this, 'remove', array('entity' => $entity), $this->initializer39b63) || 1) && $this->valueHolder313cb = $valueHolder313cb;

        return $this->valueHolder313cb->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer39b63 && ($this->initializer39b63->__invoke($valueHolder313cb, $this, 'refresh', array('entity' => $entity), $this->initializer39b63) || 1) && $this->valueHolder313cb = $valueHolder313cb;

        return $this->valueHolder313cb->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer39b63 && ($this->initializer39b63->__invoke($valueHolder313cb, $this, 'detach', array('entity' => $entity), $this->initializer39b63) || 1) && $this->valueHolder313cb = $valueHolder313cb;

        return $this->valueHolder313cb->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer39b63 && ($this->initializer39b63->__invoke($valueHolder313cb, $this, 'merge', array('entity' => $entity), $this->initializer39b63) || 1) && $this->valueHolder313cb = $valueHolder313cb;

        return $this->valueHolder313cb->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer39b63 && ($this->initializer39b63->__invoke($valueHolder313cb, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer39b63) || 1) && $this->valueHolder313cb = $valueHolder313cb;

        return $this->valueHolder313cb->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer39b63 && ($this->initializer39b63->__invoke($valueHolder313cb, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer39b63) || 1) && $this->valueHolder313cb = $valueHolder313cb;

        return $this->valueHolder313cb->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer39b63 && ($this->initializer39b63->__invoke($valueHolder313cb, $this, 'getRepository', array('entityName' => $entityName), $this->initializer39b63) || 1) && $this->valueHolder313cb = $valueHolder313cb;

        return $this->valueHolder313cb->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer39b63 && ($this->initializer39b63->__invoke($valueHolder313cb, $this, 'contains', array('entity' => $entity), $this->initializer39b63) || 1) && $this->valueHolder313cb = $valueHolder313cb;

        return $this->valueHolder313cb->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer39b63 && ($this->initializer39b63->__invoke($valueHolder313cb, $this, 'getEventManager', array(), $this->initializer39b63) || 1) && $this->valueHolder313cb = $valueHolder313cb;

        return $this->valueHolder313cb->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer39b63 && ($this->initializer39b63->__invoke($valueHolder313cb, $this, 'getConfiguration', array(), $this->initializer39b63) || 1) && $this->valueHolder313cb = $valueHolder313cb;

        return $this->valueHolder313cb->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer39b63 && ($this->initializer39b63->__invoke($valueHolder313cb, $this, 'isOpen', array(), $this->initializer39b63) || 1) && $this->valueHolder313cb = $valueHolder313cb;

        return $this->valueHolder313cb->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer39b63 && ($this->initializer39b63->__invoke($valueHolder313cb, $this, 'getUnitOfWork', array(), $this->initializer39b63) || 1) && $this->valueHolder313cb = $valueHolder313cb;

        return $this->valueHolder313cb->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer39b63 && ($this->initializer39b63->__invoke($valueHolder313cb, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer39b63) || 1) && $this->valueHolder313cb = $valueHolder313cb;

        return $this->valueHolder313cb->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer39b63 && ($this->initializer39b63->__invoke($valueHolder313cb, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer39b63) || 1) && $this->valueHolder313cb = $valueHolder313cb;

        return $this->valueHolder313cb->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer39b63 && ($this->initializer39b63->__invoke($valueHolder313cb, $this, 'getProxyFactory', array(), $this->initializer39b63) || 1) && $this->valueHolder313cb = $valueHolder313cb;

        return $this->valueHolder313cb->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer39b63 && ($this->initializer39b63->__invoke($valueHolder313cb, $this, 'initializeObject', array('obj' => $obj), $this->initializer39b63) || 1) && $this->valueHolder313cb = $valueHolder313cb;

        return $this->valueHolder313cb->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer39b63 && ($this->initializer39b63->__invoke($valueHolder313cb, $this, 'getFilters', array(), $this->initializer39b63) || 1) && $this->valueHolder313cb = $valueHolder313cb;

        return $this->valueHolder313cb->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer39b63 && ($this->initializer39b63->__invoke($valueHolder313cb, $this, 'isFiltersStateClean', array(), $this->initializer39b63) || 1) && $this->valueHolder313cb = $valueHolder313cb;

        return $this->valueHolder313cb->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer39b63 && ($this->initializer39b63->__invoke($valueHolder313cb, $this, 'hasFilters', array(), $this->initializer39b63) || 1) && $this->valueHolder313cb = $valueHolder313cb;

        return $this->valueHolder313cb->hasFilters();
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

        $instance->initializer39b63 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder313cb) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder313cb = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder313cb->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer39b63 && ($this->initializer39b63->__invoke($valueHolder313cb, $this, '__get', ['name' => $name], $this->initializer39b63) || 1) && $this->valueHolder313cb = $valueHolder313cb;

        if (isset(self::$publicPropertiese99e1[$name])) {
            return $this->valueHolder313cb->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

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

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

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

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

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

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

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
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
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

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
