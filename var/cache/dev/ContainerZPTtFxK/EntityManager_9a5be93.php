<?php

namespace ContainerZPTtFxK;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/src/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHoldere9452 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer4ba97 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties0f03e = [
        
    ];

    public function getConnection()
    {
        $this->initializer4ba97 && ($this->initializer4ba97->__invoke($valueHoldere9452, $this, 'getConnection', array(), $this->initializer4ba97) || 1) && $this->valueHoldere9452 = $valueHoldere9452;

        return $this->valueHoldere9452->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer4ba97 && ($this->initializer4ba97->__invoke($valueHoldere9452, $this, 'getMetadataFactory', array(), $this->initializer4ba97) || 1) && $this->valueHoldere9452 = $valueHoldere9452;

        return $this->valueHoldere9452->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer4ba97 && ($this->initializer4ba97->__invoke($valueHoldere9452, $this, 'getExpressionBuilder', array(), $this->initializer4ba97) || 1) && $this->valueHoldere9452 = $valueHoldere9452;

        return $this->valueHoldere9452->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer4ba97 && ($this->initializer4ba97->__invoke($valueHoldere9452, $this, 'beginTransaction', array(), $this->initializer4ba97) || 1) && $this->valueHoldere9452 = $valueHoldere9452;

        return $this->valueHoldere9452->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer4ba97 && ($this->initializer4ba97->__invoke($valueHoldere9452, $this, 'getCache', array(), $this->initializer4ba97) || 1) && $this->valueHoldere9452 = $valueHoldere9452;

        return $this->valueHoldere9452->getCache();
    }

    public function transactional($func)
    {
        $this->initializer4ba97 && ($this->initializer4ba97->__invoke($valueHoldere9452, $this, 'transactional', array('func' => $func), $this->initializer4ba97) || 1) && $this->valueHoldere9452 = $valueHoldere9452;

        return $this->valueHoldere9452->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer4ba97 && ($this->initializer4ba97->__invoke($valueHoldere9452, $this, 'wrapInTransaction', array('func' => $func), $this->initializer4ba97) || 1) && $this->valueHoldere9452 = $valueHoldere9452;

        return $this->valueHoldere9452->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer4ba97 && ($this->initializer4ba97->__invoke($valueHoldere9452, $this, 'commit', array(), $this->initializer4ba97) || 1) && $this->valueHoldere9452 = $valueHoldere9452;

        return $this->valueHoldere9452->commit();
    }

    public function rollback()
    {
        $this->initializer4ba97 && ($this->initializer4ba97->__invoke($valueHoldere9452, $this, 'rollback', array(), $this->initializer4ba97) || 1) && $this->valueHoldere9452 = $valueHoldere9452;

        return $this->valueHoldere9452->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer4ba97 && ($this->initializer4ba97->__invoke($valueHoldere9452, $this, 'getClassMetadata', array('className' => $className), $this->initializer4ba97) || 1) && $this->valueHoldere9452 = $valueHoldere9452;

        return $this->valueHoldere9452->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer4ba97 && ($this->initializer4ba97->__invoke($valueHoldere9452, $this, 'createQuery', array('dql' => $dql), $this->initializer4ba97) || 1) && $this->valueHoldere9452 = $valueHoldere9452;

        return $this->valueHoldere9452->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer4ba97 && ($this->initializer4ba97->__invoke($valueHoldere9452, $this, 'createNamedQuery', array('name' => $name), $this->initializer4ba97) || 1) && $this->valueHoldere9452 = $valueHoldere9452;

        return $this->valueHoldere9452->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer4ba97 && ($this->initializer4ba97->__invoke($valueHoldere9452, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer4ba97) || 1) && $this->valueHoldere9452 = $valueHoldere9452;

        return $this->valueHoldere9452->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer4ba97 && ($this->initializer4ba97->__invoke($valueHoldere9452, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer4ba97) || 1) && $this->valueHoldere9452 = $valueHoldere9452;

        return $this->valueHoldere9452->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer4ba97 && ($this->initializer4ba97->__invoke($valueHoldere9452, $this, 'createQueryBuilder', array(), $this->initializer4ba97) || 1) && $this->valueHoldere9452 = $valueHoldere9452;

        return $this->valueHoldere9452->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer4ba97 && ($this->initializer4ba97->__invoke($valueHoldere9452, $this, 'flush', array('entity' => $entity), $this->initializer4ba97) || 1) && $this->valueHoldere9452 = $valueHoldere9452;

        return $this->valueHoldere9452->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer4ba97 && ($this->initializer4ba97->__invoke($valueHoldere9452, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer4ba97) || 1) && $this->valueHoldere9452 = $valueHoldere9452;

        return $this->valueHoldere9452->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer4ba97 && ($this->initializer4ba97->__invoke($valueHoldere9452, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer4ba97) || 1) && $this->valueHoldere9452 = $valueHoldere9452;

        return $this->valueHoldere9452->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer4ba97 && ($this->initializer4ba97->__invoke($valueHoldere9452, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer4ba97) || 1) && $this->valueHoldere9452 = $valueHoldere9452;

        return $this->valueHoldere9452->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer4ba97 && ($this->initializer4ba97->__invoke($valueHoldere9452, $this, 'clear', array('entityName' => $entityName), $this->initializer4ba97) || 1) && $this->valueHoldere9452 = $valueHoldere9452;

        return $this->valueHoldere9452->clear($entityName);
    }

    public function close()
    {
        $this->initializer4ba97 && ($this->initializer4ba97->__invoke($valueHoldere9452, $this, 'close', array(), $this->initializer4ba97) || 1) && $this->valueHoldere9452 = $valueHoldere9452;

        return $this->valueHoldere9452->close();
    }

    public function persist($entity)
    {
        $this->initializer4ba97 && ($this->initializer4ba97->__invoke($valueHoldere9452, $this, 'persist', array('entity' => $entity), $this->initializer4ba97) || 1) && $this->valueHoldere9452 = $valueHoldere9452;

        return $this->valueHoldere9452->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer4ba97 && ($this->initializer4ba97->__invoke($valueHoldere9452, $this, 'remove', array('entity' => $entity), $this->initializer4ba97) || 1) && $this->valueHoldere9452 = $valueHoldere9452;

        return $this->valueHoldere9452->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer4ba97 && ($this->initializer4ba97->__invoke($valueHoldere9452, $this, 'refresh', array('entity' => $entity), $this->initializer4ba97) || 1) && $this->valueHoldere9452 = $valueHoldere9452;

        return $this->valueHoldere9452->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer4ba97 && ($this->initializer4ba97->__invoke($valueHoldere9452, $this, 'detach', array('entity' => $entity), $this->initializer4ba97) || 1) && $this->valueHoldere9452 = $valueHoldere9452;

        return $this->valueHoldere9452->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer4ba97 && ($this->initializer4ba97->__invoke($valueHoldere9452, $this, 'merge', array('entity' => $entity), $this->initializer4ba97) || 1) && $this->valueHoldere9452 = $valueHoldere9452;

        return $this->valueHoldere9452->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer4ba97 && ($this->initializer4ba97->__invoke($valueHoldere9452, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer4ba97) || 1) && $this->valueHoldere9452 = $valueHoldere9452;

        return $this->valueHoldere9452->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer4ba97 && ($this->initializer4ba97->__invoke($valueHoldere9452, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer4ba97) || 1) && $this->valueHoldere9452 = $valueHoldere9452;

        return $this->valueHoldere9452->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer4ba97 && ($this->initializer4ba97->__invoke($valueHoldere9452, $this, 'getRepository', array('entityName' => $entityName), $this->initializer4ba97) || 1) && $this->valueHoldere9452 = $valueHoldere9452;

        return $this->valueHoldere9452->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer4ba97 && ($this->initializer4ba97->__invoke($valueHoldere9452, $this, 'contains', array('entity' => $entity), $this->initializer4ba97) || 1) && $this->valueHoldere9452 = $valueHoldere9452;

        return $this->valueHoldere9452->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer4ba97 && ($this->initializer4ba97->__invoke($valueHoldere9452, $this, 'getEventManager', array(), $this->initializer4ba97) || 1) && $this->valueHoldere9452 = $valueHoldere9452;

        return $this->valueHoldere9452->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer4ba97 && ($this->initializer4ba97->__invoke($valueHoldere9452, $this, 'getConfiguration', array(), $this->initializer4ba97) || 1) && $this->valueHoldere9452 = $valueHoldere9452;

        return $this->valueHoldere9452->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer4ba97 && ($this->initializer4ba97->__invoke($valueHoldere9452, $this, 'isOpen', array(), $this->initializer4ba97) || 1) && $this->valueHoldere9452 = $valueHoldere9452;

        return $this->valueHoldere9452->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer4ba97 && ($this->initializer4ba97->__invoke($valueHoldere9452, $this, 'getUnitOfWork', array(), $this->initializer4ba97) || 1) && $this->valueHoldere9452 = $valueHoldere9452;

        return $this->valueHoldere9452->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer4ba97 && ($this->initializer4ba97->__invoke($valueHoldere9452, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer4ba97) || 1) && $this->valueHoldere9452 = $valueHoldere9452;

        return $this->valueHoldere9452->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer4ba97 && ($this->initializer4ba97->__invoke($valueHoldere9452, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer4ba97) || 1) && $this->valueHoldere9452 = $valueHoldere9452;

        return $this->valueHoldere9452->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer4ba97 && ($this->initializer4ba97->__invoke($valueHoldere9452, $this, 'getProxyFactory', array(), $this->initializer4ba97) || 1) && $this->valueHoldere9452 = $valueHoldere9452;

        return $this->valueHoldere9452->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer4ba97 && ($this->initializer4ba97->__invoke($valueHoldere9452, $this, 'initializeObject', array('obj' => $obj), $this->initializer4ba97) || 1) && $this->valueHoldere9452 = $valueHoldere9452;

        return $this->valueHoldere9452->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer4ba97 && ($this->initializer4ba97->__invoke($valueHoldere9452, $this, 'getFilters', array(), $this->initializer4ba97) || 1) && $this->valueHoldere9452 = $valueHoldere9452;

        return $this->valueHoldere9452->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer4ba97 && ($this->initializer4ba97->__invoke($valueHoldere9452, $this, 'isFiltersStateClean', array(), $this->initializer4ba97) || 1) && $this->valueHoldere9452 = $valueHoldere9452;

        return $this->valueHoldere9452->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer4ba97 && ($this->initializer4ba97->__invoke($valueHoldere9452, $this, 'hasFilters', array(), $this->initializer4ba97) || 1) && $this->valueHoldere9452 = $valueHoldere9452;

        return $this->valueHoldere9452->hasFilters();
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

        $instance->initializer4ba97 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHoldere9452) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHoldere9452 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHoldere9452->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer4ba97 && ($this->initializer4ba97->__invoke($valueHoldere9452, $this, '__get', ['name' => $name], $this->initializer4ba97) || 1) && $this->valueHoldere9452 = $valueHoldere9452;

        if (isset(self::$publicProperties0f03e[$name])) {
            return $this->valueHoldere9452->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldere9452;

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

        $targetObject = $this->valueHoldere9452;
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
        $this->initializer4ba97 && ($this->initializer4ba97->__invoke($valueHoldere9452, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer4ba97) || 1) && $this->valueHoldere9452 = $valueHoldere9452;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldere9452;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHoldere9452;
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
        $this->initializer4ba97 && ($this->initializer4ba97->__invoke($valueHoldere9452, $this, '__isset', array('name' => $name), $this->initializer4ba97) || 1) && $this->valueHoldere9452 = $valueHoldere9452;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldere9452;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHoldere9452;
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
        $this->initializer4ba97 && ($this->initializer4ba97->__invoke($valueHoldere9452, $this, '__unset', array('name' => $name), $this->initializer4ba97) || 1) && $this->valueHoldere9452 = $valueHoldere9452;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldere9452;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHoldere9452;
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
        $this->initializer4ba97 && ($this->initializer4ba97->__invoke($valueHoldere9452, $this, '__clone', array(), $this->initializer4ba97) || 1) && $this->valueHoldere9452 = $valueHoldere9452;

        $this->valueHoldere9452 = clone $this->valueHoldere9452;
    }

    public function __sleep()
    {
        $this->initializer4ba97 && ($this->initializer4ba97->__invoke($valueHoldere9452, $this, '__sleep', array(), $this->initializer4ba97) || 1) && $this->valueHoldere9452 = $valueHoldere9452;

        return array('valueHoldere9452');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer4ba97 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer4ba97;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer4ba97 && ($this->initializer4ba97->__invoke($valueHoldere9452, $this, 'initializeProxy', array(), $this->initializer4ba97) || 1) && $this->valueHoldere9452 = $valueHoldere9452;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHoldere9452;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHoldere9452;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
