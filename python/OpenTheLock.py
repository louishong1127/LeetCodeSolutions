from queue import Queue

class Solution:
    def openLock(self, deadends: List[str], target: str) -> int:
        deadset = set(deadends)
        if (target in deadset) or ("0000" in deadset): 
            return -1
        
        q = collections.deque()
        q.append("0000")
        
        step = 0
        while q:
            step += 1
            size = len(q)
            for i in range(size):
                point = q.popleft()
                for j in range(4):
                    for k in range(-1, 2, 2):
                        np = [i for i in point]
                        np[j] = chr((ord(np[j]) - ord('0') + k + 10) % 10 + ord('0'))
                        np = "".join(np)
                        if np == target:
                            return step
                        if (np in deadset):
                            continue
                            
                        q.append(np)
                        deadset.add(np)
        return -1
    