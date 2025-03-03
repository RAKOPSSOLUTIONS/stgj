<?php

namespace Container0oIkxma;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder8dc6c = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerc7edd = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties79576 = [
        
    ];

    public function getConnection()
    {
        $this->initializerc7edd && ($this->initializerc7edd->__invoke($valueHolder8dc6c, $this, 'getConnection', array(), $this->initializerc7edd) || 1) && $this->valueHolder8dc6c = $valueHolder8dc6c;

        return $this->valueHolder8dc6c->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerc7edd && ($this->initializerc7edd->__invoke($valueHolder8dc6c, $this, 'getMetadataFactory', array(), $this->initializerc7edd) || 1) && $this->valueHolder8dc6c = $valueHolder8dc6c;

        return $this->valueHolder8dc6c->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerc7edd && ($this->initializerc7edd->__invoke($valueHolder8dc6c, $this, 'getExpressionBuilder', array(), $this->initializerc7edd) || 1) && $this->valueHolder8dc6c = $valueHolder8dc6c;

        return $this->valueHolder8dc6c->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerc7edd && ($this->initializerc7edd->__invoke($valueHolder8dc6c, $this, 'beginTransaction', array(), $this->initializerc7edd) || 1) && $this->valueHolder8dc6c = $valueHolder8dc6c;

        return $this->valueHolder8dc6c->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerc7edd && ($this->initializerc7edd->__invoke($valueHolder8dc6c, $this, 'getCache', array(), $this->initializerc7edd) || 1) && $this->valueHolder8dc6c = $valueHolder8dc6c;

        return $this->valueHolder8dc6c->getCache();
    }

    public function transactional($func)
    {
        $this->initializerc7edd && ($this->initializerc7edd->__invoke($valueHolder8dc6c, $this, 'transactional', array('func' => $func), $this->initializerc7edd) || 1) && $this->valueHolder8dc6c = $valueHolder8dc6c;

        return $this->valueHolder8dc6c->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializerc7edd && ($this->initializerc7edd->__invoke($valueHolder8dc6c, $this, 'wrapInTransaction', array('func' => $func), $this->initializerc7edd) || 1) && $this->valueHolder8dc6c = $valueHolder8dc6c;

        return $this->valueHolder8dc6c->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializerc7edd && ($this->initializerc7edd->__invoke($valueHolder8dc6c, $this, 'commit', array(), $this->initializerc7edd) || 1) && $this->valueHolder8dc6c = $valueHolder8dc6c;

        return $this->valueHolder8dc6c->commit();
    }

    public function rollback()
    {
        $this->initializerc7edd && ($this->initializerc7edd->__invoke($valueHolder8dc6c, $this, 'rollback', array(), $this->initializerc7edd) || 1) && $this->valueHolder8dc6c = $valueHolder8dc6c;

        return $this->valueHolder8dc6c->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerc7edd && ($this->initializerc7edd->__invoke($valueHolder8dc6c, $this, 'getClassMetadata', array('className' => $className), $this->initializerc7edd) || 1) && $this->valueHolder8dc6c = $valueHolder8dc6c;

        return $this->valueHolder8dc6c->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerc7edd && ($this->initializerc7edd->__invoke($valueHolder8dc6c, $this, 'createQuery', array('dql' => $dql), $this->initializerc7edd) || 1) && $this->valueHolder8dc6c = $valueHolder8dc6c;

        return $this->valueHolder8dc6c->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerc7edd && ($this->initializerc7edd->__invoke($valueHolder8dc6c, $this, 'createNamedQuery', array('name' => $name), $this->initializerc7edd) || 1) && $this->valueHolder8dc6c = $valueHolder8dc6c;

        return $this->valueHolder8dc6c->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerc7edd && ($this->initializerc7edd->__invoke($valueHolder8dc6c, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerc7edd) || 1) && $this->valueHolder8dc6c = $valueHolder8dc6c;

        return $this->valueHolder8dc6c->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerc7edd && ($this->initializerc7edd->__invoke($valueHolder8dc6c, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerc7edd) || 1) && $this->valueHolder8dc6c = $valueHolder8dc6c;

        return $this->valueHolder8dc6c->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerc7edd && ($this->initializerc7edd->__invoke($valueHolder8dc6c, $this, 'createQueryBuilder', array(), $this->initializerc7edd) || 1) && $this->valueHolder8dc6c = $valueHolder8dc6c;

        return $this->valueHolder8dc6c->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerc7edd && ($this->initializerc7edd->__invoke($valueHolder8dc6c, $this, 'flush', array('entity' => $entity), $this->initializerc7edd) || 1) && $this->valueHolder8dc6c = $valueHolder8dc6c;

        return $this->valueHolder8dc6c->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerc7edd && ($this->initializerc7edd->__invoke($valueHolder8dc6c, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerc7edd) || 1) && $this->valueHolder8dc6c = $valueHolder8dc6c;

        return $this->valueHolder8dc6c->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerc7edd && ($this->initializerc7edd->__invoke($valueHolder8dc6c, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerc7edd) || 1) && $this->valueHolder8dc6c = $valueHolder8dc6c;

        return $this->valueHolder8dc6c->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerc7edd && ($this->initializerc7edd->__invoke($valueHolder8dc6c, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerc7edd) || 1) && $this->valueHolder8dc6c = $valueHolder8dc6c;

        return $this->valueHolder8dc6c->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerc7edd && ($this->initializerc7edd->__invoke($valueHolder8dc6c, $this, 'clear', array('entityName' => $entityName), $this->initializerc7edd) || 1) && $this->valueHolder8dc6c = $valueHolder8dc6c;

        return $this->valueHolder8dc6c->clear($entityName);
    }

    public function close()
    {
        $this->initializerc7edd && ($this->initializerc7edd->__invoke($valueHolder8dc6c, $this, 'close', array(), $this->initializerc7edd) || 1) && $this->valueHolder8dc6c = $valueHolder8dc6c;

        return $this->valueHolder8dc6c->close();
    }

    public function persist($entity)
    {
        $this->initializerc7edd && ($this->initializerc7edd->__invoke($valueHolder8dc6c, $this, 'persist', array('entity' => $entity), $this->initializerc7edd) || 1) && $this->valueHolder8dc6c = $valueHolder8dc6c;

        return $this->valueHolder8dc6c->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerc7edd && ($this->initializerc7edd->__invoke($valueHolder8dc6c, $this, 'remove', array('entity' => $entity), $this->initializerc7edd) || 1) && $this->valueHolder8dc6c = $valueHolder8dc6c;

        return $this->valueHolder8dc6c->remove($entity);
    }

    public function refresh($entity, ?int $lockMode = null)
    {
        $this->initializerc7edd && ($this->initializerc7edd->__invoke($valueHolder8dc6c, $this, 'refresh', array('entity' => $entity, 'lockMode' => $lockMode), $this->initializerc7edd) || 1) && $this->valueHolder8dc6c = $valueHolder8dc6c;

        return $this->valueHolder8dc6c->refresh($entity, $lockMode);
    }

    public function detach($entity)
    {
        $this->initializerc7edd && ($this->initializerc7edd->__invoke($valueHolder8dc6c, $this, 'detach', array('entity' => $entity), $this->initializerc7edd) || 1) && $this->valueHolder8dc6c = $valueHolder8dc6c;

        return $this->valueHolder8dc6c->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerc7edd && ($this->initializerc7edd->__invoke($valueHolder8dc6c, $this, 'merge', array('entity' => $entity), $this->initializerc7edd) || 1) && $this->valueHolder8dc6c = $valueHolder8dc6c;

        return $this->valueHolder8dc6c->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerc7edd && ($this->initializerc7edd->__invoke($valueHolder8dc6c, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerc7edd) || 1) && $this->valueHolder8dc6c = $valueHolder8dc6c;

        return $this->valueHolder8dc6c->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerc7edd && ($this->initializerc7edd->__invoke($valueHolder8dc6c, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerc7edd) || 1) && $this->valueHolder8dc6c = $valueHolder8dc6c;

        return $this->valueHolder8dc6c->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerc7edd && ($this->initializerc7edd->__invoke($valueHolder8dc6c, $this, 'getRepository', array('entityName' => $entityName), $this->initializerc7edd) || 1) && $this->valueHolder8dc6c = $valueHolder8dc6c;

        return $this->valueHolder8dc6c->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerc7edd && ($this->initializerc7edd->__invoke($valueHolder8dc6c, $this, 'contains', array('entity' => $entity), $this->initializerc7edd) || 1) && $this->valueHolder8dc6c = $valueHolder8dc6c;

        return $this->valueHolder8dc6c->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerc7edd && ($this->initializerc7edd->__invoke($valueHolder8dc6c, $this, 'getEventManager', array(), $this->initializerc7edd) || 1) && $this->valueHolder8dc6c = $valueHolder8dc6c;

        return $this->valueHolder8dc6c->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerc7edd && ($this->initializerc7edd->__invoke($valueHolder8dc6c, $this, 'getConfiguration', array(), $this->initializerc7edd) || 1) && $this->valueHolder8dc6c = $valueHolder8dc6c;

        return $this->valueHolder8dc6c->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerc7edd && ($this->initializerc7edd->__invoke($valueHolder8dc6c, $this, 'isOpen', array(), $this->initializerc7edd) || 1) && $this->valueHolder8dc6c = $valueHolder8dc6c;

        return $this->valueHolder8dc6c->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerc7edd && ($this->initializerc7edd->__invoke($valueHolder8dc6c, $this, 'getUnitOfWork', array(), $this->initializerc7edd) || 1) && $this->valueHolder8dc6c = $valueHolder8dc6c;

        return $this->valueHolder8dc6c->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerc7edd && ($this->initializerc7edd->__invoke($valueHolder8dc6c, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerc7edd) || 1) && $this->valueHolder8dc6c = $valueHolder8dc6c;

        return $this->valueHolder8dc6c->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerc7edd && ($this->initializerc7edd->__invoke($valueHolder8dc6c, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerc7edd) || 1) && $this->valueHolder8dc6c = $valueHolder8dc6c;

        return $this->valueHolder8dc6c->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerc7edd && ($this->initializerc7edd->__invoke($valueHolder8dc6c, $this, 'getProxyFactory', array(), $this->initializerc7edd) || 1) && $this->valueHolder8dc6c = $valueHolder8dc6c;

        return $this->valueHolder8dc6c->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerc7edd && ($this->initializerc7edd->__invoke($valueHolder8dc6c, $this, 'initializeObject', array('obj' => $obj), $this->initializerc7edd) || 1) && $this->valueHolder8dc6c = $valueHolder8dc6c;

        return $this->valueHolder8dc6c->initializeObject($obj);
    }

    public function isUninitializedObject($obj) : bool
    {
        $this->initializerc7edd && ($this->initializerc7edd->__invoke($valueHolder8dc6c, $this, 'isUninitializedObject', array('obj' => $obj), $this->initializerc7edd) || 1) && $this->valueHolder8dc6c = $valueHolder8dc6c;

        return $this->valueHolder8dc6c->isUninitializedObject($obj);
    }

    public function getFilters()
    {
        $this->initializerc7edd && ($this->initializerc7edd->__invoke($valueHolder8dc6c, $this, 'getFilters', array(), $this->initializerc7edd) || 1) && $this->valueHolder8dc6c = $valueHolder8dc6c;

        return $this->valueHolder8dc6c->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerc7edd && ($this->initializerc7edd->__invoke($valueHolder8dc6c, $this, 'isFiltersStateClean', array(), $this->initializerc7edd) || 1) && $this->valueHolder8dc6c = $valueHolder8dc6c;

        return $this->valueHolder8dc6c->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerc7edd && ($this->initializerc7edd->__invoke($valueHolder8dc6c, $this, 'hasFilters', array(), $this->initializerc7edd) || 1) && $this->valueHolder8dc6c = $valueHolder8dc6c;

        return $this->valueHolder8dc6c->hasFilters();
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

        $instance->initializerc7edd = $initializer;

        return $instance;
    }

    public function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, ?\Doctrine\Common\EventManager $eventManager = null)
    {
        static $reflection;

        if (! $this->valueHolder8dc6c) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder8dc6c = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder8dc6c->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializerc7edd && ($this->initializerc7edd->__invoke($valueHolder8dc6c, $this, '__get', ['name' => $name], $this->initializerc7edd) || 1) && $this->valueHolder8dc6c = $valueHolder8dc6c;

        if (isset(self::$publicProperties79576[$name])) {
            return $this->valueHolder8dc6c->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder8dc6c;

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

        $targetObject = $this->valueHolder8dc6c;
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
        $this->initializerc7edd && ($this->initializerc7edd->__invoke($valueHolder8dc6c, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerc7edd) || 1) && $this->valueHolder8dc6c = $valueHolder8dc6c;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder8dc6c;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder8dc6c;
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
        $this->initializerc7edd && ($this->initializerc7edd->__invoke($valueHolder8dc6c, $this, '__isset', array('name' => $name), $this->initializerc7edd) || 1) && $this->valueHolder8dc6c = $valueHolder8dc6c;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder8dc6c;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder8dc6c;
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
        $this->initializerc7edd && ($this->initializerc7edd->__invoke($valueHolder8dc6c, $this, '__unset', array('name' => $name), $this->initializerc7edd) || 1) && $this->valueHolder8dc6c = $valueHolder8dc6c;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder8dc6c;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder8dc6c;
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
        $this->initializerc7edd && ($this->initializerc7edd->__invoke($valueHolder8dc6c, $this, '__clone', array(), $this->initializerc7edd) || 1) && $this->valueHolder8dc6c = $valueHolder8dc6c;

        $this->valueHolder8dc6c = clone $this->valueHolder8dc6c;
    }

    public function __sleep()
    {
        $this->initializerc7edd && ($this->initializerc7edd->__invoke($valueHolder8dc6c, $this, '__sleep', array(), $this->initializerc7edd) || 1) && $this->valueHolder8dc6c = $valueHolder8dc6c;

        return array('valueHolder8dc6c');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(?\Closure $initializer = null) : void
    {
        $this->initializerc7edd = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerc7edd;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerc7edd && ($this->initializerc7edd->__invoke($valueHolder8dc6c, $this, 'initializeProxy', array(), $this->initializerc7edd) || 1) && $this->valueHolder8dc6c = $valueHolder8dc6c;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder8dc6c;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder8dc6c;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
