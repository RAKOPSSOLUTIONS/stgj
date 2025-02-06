<?php

namespace ContainerZoYn2di;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHoldercd740 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer84f67 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties15b68 = [
        
    ];

    public function getConnection()
    {
        $this->initializer84f67 && ($this->initializer84f67->__invoke($valueHoldercd740, $this, 'getConnection', array(), $this->initializer84f67) || 1) && $this->valueHoldercd740 = $valueHoldercd740;

        return $this->valueHoldercd740->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer84f67 && ($this->initializer84f67->__invoke($valueHoldercd740, $this, 'getMetadataFactory', array(), $this->initializer84f67) || 1) && $this->valueHoldercd740 = $valueHoldercd740;

        return $this->valueHoldercd740->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer84f67 && ($this->initializer84f67->__invoke($valueHoldercd740, $this, 'getExpressionBuilder', array(), $this->initializer84f67) || 1) && $this->valueHoldercd740 = $valueHoldercd740;

        return $this->valueHoldercd740->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer84f67 && ($this->initializer84f67->__invoke($valueHoldercd740, $this, 'beginTransaction', array(), $this->initializer84f67) || 1) && $this->valueHoldercd740 = $valueHoldercd740;

        return $this->valueHoldercd740->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer84f67 && ($this->initializer84f67->__invoke($valueHoldercd740, $this, 'getCache', array(), $this->initializer84f67) || 1) && $this->valueHoldercd740 = $valueHoldercd740;

        return $this->valueHoldercd740->getCache();
    }

    public function transactional($func)
    {
        $this->initializer84f67 && ($this->initializer84f67->__invoke($valueHoldercd740, $this, 'transactional', array('func' => $func), $this->initializer84f67) || 1) && $this->valueHoldercd740 = $valueHoldercd740;

        return $this->valueHoldercd740->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer84f67 && ($this->initializer84f67->__invoke($valueHoldercd740, $this, 'wrapInTransaction', array('func' => $func), $this->initializer84f67) || 1) && $this->valueHoldercd740 = $valueHoldercd740;

        return $this->valueHoldercd740->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer84f67 && ($this->initializer84f67->__invoke($valueHoldercd740, $this, 'commit', array(), $this->initializer84f67) || 1) && $this->valueHoldercd740 = $valueHoldercd740;

        return $this->valueHoldercd740->commit();
    }

    public function rollback()
    {
        $this->initializer84f67 && ($this->initializer84f67->__invoke($valueHoldercd740, $this, 'rollback', array(), $this->initializer84f67) || 1) && $this->valueHoldercd740 = $valueHoldercd740;

        return $this->valueHoldercd740->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer84f67 && ($this->initializer84f67->__invoke($valueHoldercd740, $this, 'getClassMetadata', array('className' => $className), $this->initializer84f67) || 1) && $this->valueHoldercd740 = $valueHoldercd740;

        return $this->valueHoldercd740->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer84f67 && ($this->initializer84f67->__invoke($valueHoldercd740, $this, 'createQuery', array('dql' => $dql), $this->initializer84f67) || 1) && $this->valueHoldercd740 = $valueHoldercd740;

        return $this->valueHoldercd740->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer84f67 && ($this->initializer84f67->__invoke($valueHoldercd740, $this, 'createNamedQuery', array('name' => $name), $this->initializer84f67) || 1) && $this->valueHoldercd740 = $valueHoldercd740;

        return $this->valueHoldercd740->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer84f67 && ($this->initializer84f67->__invoke($valueHoldercd740, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer84f67) || 1) && $this->valueHoldercd740 = $valueHoldercd740;

        return $this->valueHoldercd740->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer84f67 && ($this->initializer84f67->__invoke($valueHoldercd740, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer84f67) || 1) && $this->valueHoldercd740 = $valueHoldercd740;

        return $this->valueHoldercd740->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer84f67 && ($this->initializer84f67->__invoke($valueHoldercd740, $this, 'createQueryBuilder', array(), $this->initializer84f67) || 1) && $this->valueHoldercd740 = $valueHoldercd740;

        return $this->valueHoldercd740->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer84f67 && ($this->initializer84f67->__invoke($valueHoldercd740, $this, 'flush', array('entity' => $entity), $this->initializer84f67) || 1) && $this->valueHoldercd740 = $valueHoldercd740;

        return $this->valueHoldercd740->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer84f67 && ($this->initializer84f67->__invoke($valueHoldercd740, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer84f67) || 1) && $this->valueHoldercd740 = $valueHoldercd740;

        return $this->valueHoldercd740->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer84f67 && ($this->initializer84f67->__invoke($valueHoldercd740, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer84f67) || 1) && $this->valueHoldercd740 = $valueHoldercd740;

        return $this->valueHoldercd740->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer84f67 && ($this->initializer84f67->__invoke($valueHoldercd740, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer84f67) || 1) && $this->valueHoldercd740 = $valueHoldercd740;

        return $this->valueHoldercd740->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer84f67 && ($this->initializer84f67->__invoke($valueHoldercd740, $this, 'clear', array('entityName' => $entityName), $this->initializer84f67) || 1) && $this->valueHoldercd740 = $valueHoldercd740;

        return $this->valueHoldercd740->clear($entityName);
    }

    public function close()
    {
        $this->initializer84f67 && ($this->initializer84f67->__invoke($valueHoldercd740, $this, 'close', array(), $this->initializer84f67) || 1) && $this->valueHoldercd740 = $valueHoldercd740;

        return $this->valueHoldercd740->close();
    }

    public function persist($entity)
    {
        $this->initializer84f67 && ($this->initializer84f67->__invoke($valueHoldercd740, $this, 'persist', array('entity' => $entity), $this->initializer84f67) || 1) && $this->valueHoldercd740 = $valueHoldercd740;

        return $this->valueHoldercd740->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer84f67 && ($this->initializer84f67->__invoke($valueHoldercd740, $this, 'remove', array('entity' => $entity), $this->initializer84f67) || 1) && $this->valueHoldercd740 = $valueHoldercd740;

        return $this->valueHoldercd740->remove($entity);
    }

    public function refresh($entity, ?int $lockMode = null)
    {
        $this->initializer84f67 && ($this->initializer84f67->__invoke($valueHoldercd740, $this, 'refresh', array('entity' => $entity, 'lockMode' => $lockMode), $this->initializer84f67) || 1) && $this->valueHoldercd740 = $valueHoldercd740;

        return $this->valueHoldercd740->refresh($entity, $lockMode);
    }

    public function detach($entity)
    {
        $this->initializer84f67 && ($this->initializer84f67->__invoke($valueHoldercd740, $this, 'detach', array('entity' => $entity), $this->initializer84f67) || 1) && $this->valueHoldercd740 = $valueHoldercd740;

        return $this->valueHoldercd740->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer84f67 && ($this->initializer84f67->__invoke($valueHoldercd740, $this, 'merge', array('entity' => $entity), $this->initializer84f67) || 1) && $this->valueHoldercd740 = $valueHoldercd740;

        return $this->valueHoldercd740->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer84f67 && ($this->initializer84f67->__invoke($valueHoldercd740, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer84f67) || 1) && $this->valueHoldercd740 = $valueHoldercd740;

        return $this->valueHoldercd740->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer84f67 && ($this->initializer84f67->__invoke($valueHoldercd740, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer84f67) || 1) && $this->valueHoldercd740 = $valueHoldercd740;

        return $this->valueHoldercd740->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer84f67 && ($this->initializer84f67->__invoke($valueHoldercd740, $this, 'getRepository', array('entityName' => $entityName), $this->initializer84f67) || 1) && $this->valueHoldercd740 = $valueHoldercd740;

        return $this->valueHoldercd740->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer84f67 && ($this->initializer84f67->__invoke($valueHoldercd740, $this, 'contains', array('entity' => $entity), $this->initializer84f67) || 1) && $this->valueHoldercd740 = $valueHoldercd740;

        return $this->valueHoldercd740->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer84f67 && ($this->initializer84f67->__invoke($valueHoldercd740, $this, 'getEventManager', array(), $this->initializer84f67) || 1) && $this->valueHoldercd740 = $valueHoldercd740;

        return $this->valueHoldercd740->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer84f67 && ($this->initializer84f67->__invoke($valueHoldercd740, $this, 'getConfiguration', array(), $this->initializer84f67) || 1) && $this->valueHoldercd740 = $valueHoldercd740;

        return $this->valueHoldercd740->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer84f67 && ($this->initializer84f67->__invoke($valueHoldercd740, $this, 'isOpen', array(), $this->initializer84f67) || 1) && $this->valueHoldercd740 = $valueHoldercd740;

        return $this->valueHoldercd740->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer84f67 && ($this->initializer84f67->__invoke($valueHoldercd740, $this, 'getUnitOfWork', array(), $this->initializer84f67) || 1) && $this->valueHoldercd740 = $valueHoldercd740;

        return $this->valueHoldercd740->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer84f67 && ($this->initializer84f67->__invoke($valueHoldercd740, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer84f67) || 1) && $this->valueHoldercd740 = $valueHoldercd740;

        return $this->valueHoldercd740->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer84f67 && ($this->initializer84f67->__invoke($valueHoldercd740, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer84f67) || 1) && $this->valueHoldercd740 = $valueHoldercd740;

        return $this->valueHoldercd740->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer84f67 && ($this->initializer84f67->__invoke($valueHoldercd740, $this, 'getProxyFactory', array(), $this->initializer84f67) || 1) && $this->valueHoldercd740 = $valueHoldercd740;

        return $this->valueHoldercd740->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer84f67 && ($this->initializer84f67->__invoke($valueHoldercd740, $this, 'initializeObject', array('obj' => $obj), $this->initializer84f67) || 1) && $this->valueHoldercd740 = $valueHoldercd740;

        return $this->valueHoldercd740->initializeObject($obj);
    }

    public function isUninitializedObject($obj) : bool
    {
        $this->initializer84f67 && ($this->initializer84f67->__invoke($valueHoldercd740, $this, 'isUninitializedObject', array('obj' => $obj), $this->initializer84f67) || 1) && $this->valueHoldercd740 = $valueHoldercd740;

        return $this->valueHoldercd740->isUninitializedObject($obj);
    }

    public function getFilters()
    {
        $this->initializer84f67 && ($this->initializer84f67->__invoke($valueHoldercd740, $this, 'getFilters', array(), $this->initializer84f67) || 1) && $this->valueHoldercd740 = $valueHoldercd740;

        return $this->valueHoldercd740->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer84f67 && ($this->initializer84f67->__invoke($valueHoldercd740, $this, 'isFiltersStateClean', array(), $this->initializer84f67) || 1) && $this->valueHoldercd740 = $valueHoldercd740;

        return $this->valueHoldercd740->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer84f67 && ($this->initializer84f67->__invoke($valueHoldercd740, $this, 'hasFilters', array(), $this->initializer84f67) || 1) && $this->valueHoldercd740 = $valueHoldercd740;

        return $this->valueHoldercd740->hasFilters();
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

        $instance->initializer84f67 = $initializer;

        return $instance;
    }

    public function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, ?\Doctrine\Common\EventManager $eventManager = null)
    {
        static $reflection;

        if (! $this->valueHoldercd740) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHoldercd740 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHoldercd740->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer84f67 && ($this->initializer84f67->__invoke($valueHoldercd740, $this, '__get', ['name' => $name], $this->initializer84f67) || 1) && $this->valueHoldercd740 = $valueHoldercd740;

        if (isset(self::$publicProperties15b68[$name])) {
            return $this->valueHoldercd740->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldercd740;

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

        $targetObject = $this->valueHoldercd740;
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
        $this->initializer84f67 && ($this->initializer84f67->__invoke($valueHoldercd740, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer84f67) || 1) && $this->valueHoldercd740 = $valueHoldercd740;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldercd740;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHoldercd740;
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
        $this->initializer84f67 && ($this->initializer84f67->__invoke($valueHoldercd740, $this, '__isset', array('name' => $name), $this->initializer84f67) || 1) && $this->valueHoldercd740 = $valueHoldercd740;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldercd740;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHoldercd740;
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
        $this->initializer84f67 && ($this->initializer84f67->__invoke($valueHoldercd740, $this, '__unset', array('name' => $name), $this->initializer84f67) || 1) && $this->valueHoldercd740 = $valueHoldercd740;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldercd740;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHoldercd740;
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
        $this->initializer84f67 && ($this->initializer84f67->__invoke($valueHoldercd740, $this, '__clone', array(), $this->initializer84f67) || 1) && $this->valueHoldercd740 = $valueHoldercd740;

        $this->valueHoldercd740 = clone $this->valueHoldercd740;
    }

    public function __sleep()
    {
        $this->initializer84f67 && ($this->initializer84f67->__invoke($valueHoldercd740, $this, '__sleep', array(), $this->initializer84f67) || 1) && $this->valueHoldercd740 = $valueHoldercd740;

        return array('valueHoldercd740');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(?\Closure $initializer = null) : void
    {
        $this->initializer84f67 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer84f67;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer84f67 && ($this->initializer84f67->__invoke($valueHoldercd740, $this, 'initializeProxy', array(), $this->initializer84f67) || 1) && $this->valueHoldercd740 = $valueHoldercd740;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHoldercd740;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHoldercd740;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
