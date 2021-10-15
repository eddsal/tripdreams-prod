<?php

namespace Container1dTM1Mx;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
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

    public function getConnection()
    {
        $this->initializer674e5 && ($this->initializer674e5->__invoke($valueHolderaf940, $this, 'getConnection', array(), $this->initializer674e5) || 1) && $this->valueHolderaf940 = $valueHolderaf940;

        return $this->valueHolderaf940->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer674e5 && ($this->initializer674e5->__invoke($valueHolderaf940, $this, 'getMetadataFactory', array(), $this->initializer674e5) || 1) && $this->valueHolderaf940 = $valueHolderaf940;

        return $this->valueHolderaf940->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer674e5 && ($this->initializer674e5->__invoke($valueHolderaf940, $this, 'getExpressionBuilder', array(), $this->initializer674e5) || 1) && $this->valueHolderaf940 = $valueHolderaf940;

        return $this->valueHolderaf940->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer674e5 && ($this->initializer674e5->__invoke($valueHolderaf940, $this, 'beginTransaction', array(), $this->initializer674e5) || 1) && $this->valueHolderaf940 = $valueHolderaf940;

        return $this->valueHolderaf940->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer674e5 && ($this->initializer674e5->__invoke($valueHolderaf940, $this, 'getCache', array(), $this->initializer674e5) || 1) && $this->valueHolderaf940 = $valueHolderaf940;

        return $this->valueHolderaf940->getCache();
    }

    public function transactional($func)
    {
        $this->initializer674e5 && ($this->initializer674e5->__invoke($valueHolderaf940, $this, 'transactional', array('func' => $func), $this->initializer674e5) || 1) && $this->valueHolderaf940 = $valueHolderaf940;

        return $this->valueHolderaf940->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer674e5 && ($this->initializer674e5->__invoke($valueHolderaf940, $this, 'wrapInTransaction', array('func' => $func), $this->initializer674e5) || 1) && $this->valueHolderaf940 = $valueHolderaf940;

        return $this->valueHolderaf940->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer674e5 && ($this->initializer674e5->__invoke($valueHolderaf940, $this, 'commit', array(), $this->initializer674e5) || 1) && $this->valueHolderaf940 = $valueHolderaf940;

        return $this->valueHolderaf940->commit();
    }

    public function rollback()
    {
        $this->initializer674e5 && ($this->initializer674e5->__invoke($valueHolderaf940, $this, 'rollback', array(), $this->initializer674e5) || 1) && $this->valueHolderaf940 = $valueHolderaf940;

        return $this->valueHolderaf940->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer674e5 && ($this->initializer674e5->__invoke($valueHolderaf940, $this, 'getClassMetadata', array('className' => $className), $this->initializer674e5) || 1) && $this->valueHolderaf940 = $valueHolderaf940;

        return $this->valueHolderaf940->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer674e5 && ($this->initializer674e5->__invoke($valueHolderaf940, $this, 'createQuery', array('dql' => $dql), $this->initializer674e5) || 1) && $this->valueHolderaf940 = $valueHolderaf940;

        return $this->valueHolderaf940->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer674e5 && ($this->initializer674e5->__invoke($valueHolderaf940, $this, 'createNamedQuery', array('name' => $name), $this->initializer674e5) || 1) && $this->valueHolderaf940 = $valueHolderaf940;

        return $this->valueHolderaf940->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer674e5 && ($this->initializer674e5->__invoke($valueHolderaf940, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer674e5) || 1) && $this->valueHolderaf940 = $valueHolderaf940;

        return $this->valueHolderaf940->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer674e5 && ($this->initializer674e5->__invoke($valueHolderaf940, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer674e5) || 1) && $this->valueHolderaf940 = $valueHolderaf940;

        return $this->valueHolderaf940->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer674e5 && ($this->initializer674e5->__invoke($valueHolderaf940, $this, 'createQueryBuilder', array(), $this->initializer674e5) || 1) && $this->valueHolderaf940 = $valueHolderaf940;

        return $this->valueHolderaf940->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer674e5 && ($this->initializer674e5->__invoke($valueHolderaf940, $this, 'flush', array('entity' => $entity), $this->initializer674e5) || 1) && $this->valueHolderaf940 = $valueHolderaf940;

        return $this->valueHolderaf940->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer674e5 && ($this->initializer674e5->__invoke($valueHolderaf940, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer674e5) || 1) && $this->valueHolderaf940 = $valueHolderaf940;

        return $this->valueHolderaf940->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer674e5 && ($this->initializer674e5->__invoke($valueHolderaf940, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer674e5) || 1) && $this->valueHolderaf940 = $valueHolderaf940;

        return $this->valueHolderaf940->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer674e5 && ($this->initializer674e5->__invoke($valueHolderaf940, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer674e5) || 1) && $this->valueHolderaf940 = $valueHolderaf940;

        return $this->valueHolderaf940->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer674e5 && ($this->initializer674e5->__invoke($valueHolderaf940, $this, 'clear', array('entityName' => $entityName), $this->initializer674e5) || 1) && $this->valueHolderaf940 = $valueHolderaf940;

        return $this->valueHolderaf940->clear($entityName);
    }

    public function close()
    {
        $this->initializer674e5 && ($this->initializer674e5->__invoke($valueHolderaf940, $this, 'close', array(), $this->initializer674e5) || 1) && $this->valueHolderaf940 = $valueHolderaf940;

        return $this->valueHolderaf940->close();
    }

    public function persist($entity)
    {
        $this->initializer674e5 && ($this->initializer674e5->__invoke($valueHolderaf940, $this, 'persist', array('entity' => $entity), $this->initializer674e5) || 1) && $this->valueHolderaf940 = $valueHolderaf940;

        return $this->valueHolderaf940->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer674e5 && ($this->initializer674e5->__invoke($valueHolderaf940, $this, 'remove', array('entity' => $entity), $this->initializer674e5) || 1) && $this->valueHolderaf940 = $valueHolderaf940;

        return $this->valueHolderaf940->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer674e5 && ($this->initializer674e5->__invoke($valueHolderaf940, $this, 'refresh', array('entity' => $entity), $this->initializer674e5) || 1) && $this->valueHolderaf940 = $valueHolderaf940;

        return $this->valueHolderaf940->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer674e5 && ($this->initializer674e5->__invoke($valueHolderaf940, $this, 'detach', array('entity' => $entity), $this->initializer674e5) || 1) && $this->valueHolderaf940 = $valueHolderaf940;

        return $this->valueHolderaf940->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer674e5 && ($this->initializer674e5->__invoke($valueHolderaf940, $this, 'merge', array('entity' => $entity), $this->initializer674e5) || 1) && $this->valueHolderaf940 = $valueHolderaf940;

        return $this->valueHolderaf940->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer674e5 && ($this->initializer674e5->__invoke($valueHolderaf940, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer674e5) || 1) && $this->valueHolderaf940 = $valueHolderaf940;

        return $this->valueHolderaf940->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer674e5 && ($this->initializer674e5->__invoke($valueHolderaf940, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer674e5) || 1) && $this->valueHolderaf940 = $valueHolderaf940;

        return $this->valueHolderaf940->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer674e5 && ($this->initializer674e5->__invoke($valueHolderaf940, $this, 'getRepository', array('entityName' => $entityName), $this->initializer674e5) || 1) && $this->valueHolderaf940 = $valueHolderaf940;

        return $this->valueHolderaf940->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer674e5 && ($this->initializer674e5->__invoke($valueHolderaf940, $this, 'contains', array('entity' => $entity), $this->initializer674e5) || 1) && $this->valueHolderaf940 = $valueHolderaf940;

        return $this->valueHolderaf940->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer674e5 && ($this->initializer674e5->__invoke($valueHolderaf940, $this, 'getEventManager', array(), $this->initializer674e5) || 1) && $this->valueHolderaf940 = $valueHolderaf940;

        return $this->valueHolderaf940->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer674e5 && ($this->initializer674e5->__invoke($valueHolderaf940, $this, 'getConfiguration', array(), $this->initializer674e5) || 1) && $this->valueHolderaf940 = $valueHolderaf940;

        return $this->valueHolderaf940->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer674e5 && ($this->initializer674e5->__invoke($valueHolderaf940, $this, 'isOpen', array(), $this->initializer674e5) || 1) && $this->valueHolderaf940 = $valueHolderaf940;

        return $this->valueHolderaf940->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer674e5 && ($this->initializer674e5->__invoke($valueHolderaf940, $this, 'getUnitOfWork', array(), $this->initializer674e5) || 1) && $this->valueHolderaf940 = $valueHolderaf940;

        return $this->valueHolderaf940->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer674e5 && ($this->initializer674e5->__invoke($valueHolderaf940, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer674e5) || 1) && $this->valueHolderaf940 = $valueHolderaf940;

        return $this->valueHolderaf940->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer674e5 && ($this->initializer674e5->__invoke($valueHolderaf940, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer674e5) || 1) && $this->valueHolderaf940 = $valueHolderaf940;

        return $this->valueHolderaf940->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer674e5 && ($this->initializer674e5->__invoke($valueHolderaf940, $this, 'getProxyFactory', array(), $this->initializer674e5) || 1) && $this->valueHolderaf940 = $valueHolderaf940;

        return $this->valueHolderaf940->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer674e5 && ($this->initializer674e5->__invoke($valueHolderaf940, $this, 'initializeObject', array('obj' => $obj), $this->initializer674e5) || 1) && $this->valueHolderaf940 = $valueHolderaf940;

        return $this->valueHolderaf940->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer674e5 && ($this->initializer674e5->__invoke($valueHolderaf940, $this, 'getFilters', array(), $this->initializer674e5) || 1) && $this->valueHolderaf940 = $valueHolderaf940;

        return $this->valueHolderaf940->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer674e5 && ($this->initializer674e5->__invoke($valueHolderaf940, $this, 'isFiltersStateClean', array(), $this->initializer674e5) || 1) && $this->valueHolderaf940 = $valueHolderaf940;

        return $this->valueHolderaf940->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer674e5 && ($this->initializer674e5->__invoke($valueHolderaf940, $this, 'hasFilters', array(), $this->initializer674e5) || 1) && $this->valueHolderaf940 = $valueHolderaf940;

        return $this->valueHolderaf940->hasFilters();
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

        $instance->initializer674e5 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolderaf940) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderaf940 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderaf940->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer674e5 && ($this->initializer674e5->__invoke($valueHolderaf940, $this, '__get', ['name' => $name], $this->initializer674e5) || 1) && $this->valueHolderaf940 = $valueHolderaf940;

        if (isset(self::$publicPropertiese5223[$name])) {
            return $this->valueHolderaf940->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

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

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

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

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

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

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

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
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
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

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
